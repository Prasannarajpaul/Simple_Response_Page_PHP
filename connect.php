<?php
    //variable = getting variable data from post method in html
    //php variable = post method [html variable]
    $Name = $_POST['Name'];
    $Mail = $_POST['Mail'];
    $Mobile = $_POST['Mobile'];

    //create database
    //create it in phpMyAdmin
    //connect database
    $conn = new mysqli('localhost','root','','kishore');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into feedback(Name, Mail, Mobile) values(?, ?, ?)");
        //int i, double d, string s, blob b
        //bindind data types
        $stmt->bind_param("sss",$Name, $Mail, $Mobile);
        $stmt->execute();
        echo "Sent Successfully...";
        $stmt->close();
        $conn->close();
    }
?>