<?php
    // class connect{
    //     public $server;
    //     public $user;
    //     public $password;
    //     public $dbname;

    //     public function __construct()
    //     {
    //         $this->server ="co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    //         $this->user ="	w5tu1m1b35khyzh8";
    //         $this->password ="pu651oeqhod84ar1";
    //         $this->dbname = "veqadsufindlic4z";
    //     }
    //     //option 1: use mySQLi
    //     function connectToMySQL(): mysqli{
    //         $conn_my = new mysqli($this->server,$this->user,$this->password,$this->dbname);
    //         if($conn_my->connect_error){
    //             die("failed" .$conn_my->connect_error);
    //         }else{
    //             // echo "connect!!";
    //         }
    //         return $conn_my;
    //     }
    //     //option 2: connect video
    //     function connectToPDO(): PDO{
    //         try{
    //             $conn_pdo = new PDO
    //             ("mysql:host=$this->server;dbname=$this->dbname",$this->user,$this->password);
    //             // echo "connect to PDO";
    //         }catch(PDOException $e){
    //             die("failed $e");
    //         }
    //         return $conn_pdo;
    //     }
    // }
    // //test connect
    $conn = mysqli_connect('co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','w5tu1m1b35khyzh8','pu651oeqhod84ar1','veqadsufindlic4z') or die("can not connect database" .mysqli_connect_error());
?>
