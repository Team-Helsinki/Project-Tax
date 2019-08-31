<?php
require_once 'connection.php';

        $email = $_POST["email"];
        $phoneNo = $_POST["phone"];
        $pass = rand(8, 100000000);
        $cTin = base64_encode($pass);
        $name = $_POST["name"];
        $cName = base64_encode($name);
        $token = "";
        $dateMade = date("Y-m-d: H-m-s");

        $query = "INSERT INTO users (tin, email, token, name, phone, date) VALUES ('$pass', '$email', '$token', '$name', '$phoneNo', '$dateMade')";
        $result = mysqli_query($connection, $query);
        if($result){
            
            header("Location: ../signup-details.php?welcome=$cTin&user=$cName");
            exit;
        }
