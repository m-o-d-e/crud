<?php 
$con = new mysqli('localhost','root','');
$dbconfig = mysqli_select_db($con,'kool_db');
session_start();
$session_id=$_session['session_id'];
if(isset($_POST['checkout'])){
    $query="SELECT * from cart_items where session_id=$session_id" ;
    $result=mysqli_query($con,$query);
    
}
?>