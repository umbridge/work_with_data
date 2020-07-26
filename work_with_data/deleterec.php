<?php
session_start();
if(!(isset($_SESSION['logged-in']))){
    header('Location: log.php');
    exit();
}
if($_GET['delete']){
    $company=$_GET['delete'];
        $connect = mysqli_connect("localhost", "root", "", "designhousetask") ;
        $querry="DELETE FROM `table 1` WHERE COMPANY_NAME='$company'";
        $res = mysqli_query($connect, $querry) or die( mysqli_error($connect));
        if($res){
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;
            }
            
            form 
            {
                
                width: 50%;
                height:50%;
                margin: 5% 25% 5% 25%;
            }
            h1 {
              background-color: #FF5912;
              color: white;
              margin: 0.5%;
              font-size: 40px;    
              text-emphasis: Login;
              border-radius: 10px;    
              border: none;
              cursor: pointer;
              width: 50%;
            }
            h1:hover {
              opacity: 0.8;
            }

            .container 
            {
              padding: 2%;
                margin: 20%;
              border: grey 4px solid; 
                background-color: #f2f2f2;
            }
            
        </style>
        
    </head>
    
    <body>
            <div class="container">
             <?php 
            echo "<center><h1>record deleted</h1><center>";  
        }
                ?>
                <a href="frame6.html" align="center">Back</a>
            </div>  
 </body>
</html>
<?php
}
?>
