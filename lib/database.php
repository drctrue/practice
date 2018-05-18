<?php
class Database{
//    public $db;
    public $pdo;
    public function __construct(){

        $dsn = "mysql:host=localhost;port=3306;dbname=test_db;charset=utf8;";
//        $this->db = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->pdo = new PDO($dsn, 'root', '', $options);
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }

        return $this;
    }

    public function execute($sql) {
        $sth = $this->pdo->prepare($sql);

        return $sth->execute();
    }

    public function query($sql) {

        $sth = $this->pdo->prepare($sql);

        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false) {
            return [];
        }

        return $result;
    }


//    public function get_all_db($sql){
//        $res = mysqli_query($this->db, $sql);
//        if(!$res){
//            return array();
//        }
//        else{
//            while ($row = mysqli_fetch_assoc($res)) {
//                $res_row[] = $row;
//            }
//        }
//        return $res_row;
//    }

//    public function get_one_db($sql){
//        $res = mysqli_query($this->db, $sql);
//        if(!$res){
//            return array();
//        }
//        else{
//            return mysqli_fetch_assoc($res);
//        }
//    }

//    public function insert_to_db($sql){
//        $res = mysqli_query($this->db, $sql);
//        if(!$res){
//            return FALSE;
//        }
//        else{
//            return $this->db->insert_id;
//        }
//    }

//    public function insert_to($sql){
//        $res = mysqli_query($this->db, $sql);
//        if(!$res){
//            return FALSE;
//        }
//        else{
//            return TRUE;
//        }
//    }
//
//    public function update_to_db($sql){
//        $res = mysqli_query($this->db, $sql);
//        if(!$res){
//            return FALSE;
//        }
//        else{
//            return TRUE;
//        }
//    }
}