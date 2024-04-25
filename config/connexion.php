<?php
    function openDB(){
        $server="localhost";
        $user="root";
        $pwd="";
        $DB="hamis_haje";
        try{
            $pdo=new PDO(
                "mysql:host=$server;dbname=$DB",$user,$pwd,
                [//get error message :
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        catch(PDOException $e){
            echo "DB not open: ". $e->getMessage();
        }
        return $pdo;
    }
?>