<?php
require 'connection.php';
    
    $query = "SELECT * FROM campaign";
    
    $result = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    $camArray = array();
    
    while ($row = mysqli_fetch_array($result)) {
        $id=$row[0];
        $username = $row[1];
        $password =$row[2];
        $name = $row[3];
        $address= $row[4];
        $contactNo = $row[5];
        $email = $row[6];
        

        //Create stock objects and store them in an array.
        $cam = new camEntity($id,$username,$name,$address,$contactNo ,$email);
        array_push($stockArray, $stock);
    }
?>
