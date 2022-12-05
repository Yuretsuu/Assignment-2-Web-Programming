<?php 
class Datasource{
    private static $instance;
    private $mysqli;

    // Private constructor for singleton pattern
    private function __construct (){
        $this->mysqli = new mysqli("localhost","root","root","restaurant");
        $this->mysqli->set_charset("utf8");
    }

    public static function getInst(){
        if (Datasource::$instance == null) {
            Datasource::$instance = new Datasource();
        }
        return Datasource::$instance;
    } 

    public function getConnection(){
        return $this->mysqli;
    }
}
?>