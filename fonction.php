<?php

     $con = new mysqli('localhost','root','');
    $dbconfig = mysqli_select_db($con,'kool_db');

    session_start();
   

    if(isset($_POST['prod_name'])){
        $prod_name = $_POST['prod_name'];
        $sql = "SELECT id FROM product WHERE name = '$prod_name'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $session_id = $_SESSION['session_id'];//session_id
        $product_id = $row['id']; //product_id
        
        $sql = "SELECT quantity FROM cart_item WHERE product_id = $product_id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        
        if($row['quantity']){
            $quantity = $row['quantity'] + 1;
            $sql = "UPDATE cart_item SET quantity = $quantity WHERE product_id = $product_id";
            $result = mysqli_query($con,$sql);
        }else{
            $sql = "INSERT INTO cart_item (session_id,product_id,quantity) VALUES($session_id,$product_id,1)";
            $result = mysqli_query($con,$sql);
        }
    

        
    }

    
?>