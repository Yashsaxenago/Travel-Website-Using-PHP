<?php
session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con, 'book_db');
$name=$_POST['name'];
$pass=$_POST['password'];

$s="select * from signup where name ='$name'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num == 1){
    echo"username alreday taken";
}else{
    $reg="insert into signup(name, password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    header('location:login.php');
}

?>