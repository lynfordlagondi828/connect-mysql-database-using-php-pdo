<?php

    class db_functions{

        private $conn;

        function __construct()
        {
            require_once 'db_config.php';
            $database = new db_config();
            $this->conn = $database->dbConnect();

            echo "DATABASE CONNECTED";
        }
    }
?>