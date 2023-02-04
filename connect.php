<?php
    $category = $_POST['category'];
    $service = $_POST['services'];
    $discription = $_POST['discription'];
    $path = "";

        $servername = "localhost";
        $username = "root";
        $password = "";
            
        
        $conn = mysqli_connect($servername,$username,$password,"userform");

        echo "connection was successful";


        if(!$conn)
            echo ("sorry we failed to connect :". mysqli_connect_error());
        else{
            echo "connection was successfull";
            $sql ="CREATE DATABASE complaint";
            $result=mysqli_query($conn,$sql);
           
            $sql = "INSERT INTO complainttemp(category,services,discription,filename) values('$category','$service','$discription','$path')";
            if ($conn->query($sql)){
            echo "New record is inserted sucessfully";
        }else{
            echo "not inserted".mysqli_error($conn);
        }        
        }
    
?>