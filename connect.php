<?php
   $Name= $_POST['Name'];
   $email= $_POST['email'];
   $password= $_POST['password'];
   $Re-Password= $_POST['Re-Password'];

   //Create Database
   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
    die('Connection Failed :'.$conn->connection_error);
   }else{
    $stmt = $conn->prepare("insert into Registration(Name,email,password,Re-Password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name,$email,$password,$Re-Password);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close(); 
   }
?>