<?php
    class db_config{

        private $conn;

        function __construct()
        {
            
        }

        function dbConnect(){

            $this->conn = new PDO("mysql:host=localhost;dbname=youtube_channel","root","");
            return $this->conn;
        }
    }
?>