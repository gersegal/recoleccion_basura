<?php
     $server = 'localhost';
     $database = 'Green_Pal_Test';
     $username = 'root';
     $password = 'root';

     try{
        $pdo = new PDO("mysql:host=$server; dbname=$database", $username, $password);
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }