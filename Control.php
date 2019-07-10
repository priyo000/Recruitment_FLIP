<?php
$curl=curl_init();
$key="HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";

curl_setopt($curl, CURLOPT_URL, 'https://nextar.flip.id/disburse');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_POST, TRUE);

$post = [
    "bank_code" => "bri",
    "account_number" => "5555",
    "amount" => "1000",
    "remark" => "test"
];

curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));

curl_setopt($curl, CURL_HTTPHEADER, "Content-Type: application/x-www-form-urlencoded");

curl_setopt($curl, CURLOPT_USERNAME, $key);
$respon = curl_exec($curl);
curl_close($curl);

echo $respon;
?>