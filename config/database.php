<?php
    session_start();
   
    $host='localhost';
    $user='root';
    $password='';
    $db_name='justelocaleeat';
    $encoding='utf8';

    // try{
        $db = new PDO("mysql:host=$host;dbname=$db_name;charset=$encoding",$user,$password);
        // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }
    // catch(PDOException $e){
    
    //     die($e->getMessage());
    // }

    // error_reporting(-1);
    // ini_set("display_errors",1);
?>
