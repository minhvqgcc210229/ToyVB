<?php
    class connect{
        public $server;
        public $user;
        public $password;
        public $dbname;

        public function __construct()
        {
            $this->server ="i0rgccmrx3at3wv3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
            $this->user ="ty8x5p83mnsj0uue";
            $this->password ="h0cc5il9lcxkmqxp";
            $this->dbname = "f2b7a0waxsi8qmfg";
        }
        //option 1: use mySQLi
        function connectToMySQL(): mysqli{
            $conn_my = new mysqli($this->server,$this->user,$this->password,$this->dbname);
            if($conn_my->connect_error){
                die("failed" .$conn_my->connect_error);
            }else{
                // echo "connect!!";
            }
            return $conn_my;
        }
        //option 2: connect video
        function connectToPDO(): PDO{
            try{
                $conn_pdo = new PDO
                ("mysql:host=$this->server;dbname=$this->dbname",$this->user,$this->password);
                // echo "connect to PDO";
            }catch(PDOException $e){
                die("failed $e");
            }
            return $conn_pdo;
        }
    }
    // //test connect
    $conn = mysqli_connect('i0rgccmrx3at3wv3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','ty8x5p83mnsj0uue','h0cc5il9lcxkmqxp','f2b7a0waxsi8qmfg') or die("can not connect database" .mysqli_connect_error());
?>
