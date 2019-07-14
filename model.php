<?php
include 'config.php';
    class query extends config
    {
        public function save($data){
            $save="INSERT INTO tb_disbursement VALUES ('$data')";
            mysqli_query($this->db,$save);
        }

        public function update($id,$status,$receipt,$time){
            $update="UPDATE tb_disbursement SET status='$status', receipt='$receipt', time_served='$time' WHERE id='$id'";
            mysqli_query($this->db,$update);
        }

        public function get($id){
            $data=mysqli_query($this->db,"SELECT * FROM tb_disbursement WHERE id='$id'");
                $hasil = mysqli_fetch_assoc($data);
            return $hasil;
        }

    }
    
?>