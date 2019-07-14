<?php
include 'model.php';
class flip{
    private $query;
    public function __construct()
    {
        $this->query=new query();
    }

    public function post_FLIP(){  
        $key="HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
        $post = [
            "bank_code" =>  $_POST['bank_code'],
            "account_number" => $_POST['account_number'],
            "amount" => $_POST['amount'],
            "remark" => $_POST['remark']
        ];

        $curl=curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://nextar.flip.id/disburse');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);

        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($curl, CURL_HTTPHEADER, "Content-Type: application/x-www-form-urlencoded");
        curl_setopt($curl, CURLOPT_USERNAME, $key);

        $respon = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($respon,true); 
        $this->query->save(implode("','",$data));
        return $data;
    }

    function cek_FLIP(){
        $key="HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
        $id_transaksi=$_POST['id'];

        $curl=curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://nextar.flip.id/disburse/$id_transaksi");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURL_HTTPHEADER, "Content-Type: application/x-www-form-urlencoded");
        curl_setopt($curl, CURLOPT_USERNAME, $key);

        $respon = curl_exec($curl);
        curl_close($curl);
        $data=json_decode($respon);

        $this->query->update($data->id,$data->status,$data->receipt,$data->time_served);
        return $this->query->get($data->id);
    }
}




?>