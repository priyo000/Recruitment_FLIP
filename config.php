<?php
class config{
    private $server = "localhost";
    private $user = "priyo";
    private $password = "priyo";
    private $nama_database = "db_flip";
    public function __construct()
    {
    $this->db = mysqli_connect($this->server,$this->user, $this->password, $this->nama_database);
    if( !$this->db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    } 
}           
}
?>