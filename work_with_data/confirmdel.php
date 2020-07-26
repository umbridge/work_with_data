<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: log.php');
        exit();
    }
    if($_POST['del'])
    {
    $company=$_GET['delete'];
    $connect = mysqli_connect("localhost", "root", "", "designhousetask") ;
    $querry="DELETE FROM `table 1` WHERE COMPANY_NAME='$company'";
    $res = mysqli_query($connect, $querry) or die( mysqli_error($connect));
    if($res){

        echo "record deleted";
    }
    }
    else{
        header('location:frame6.html');
    }
?>