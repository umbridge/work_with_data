<?php
session_start();
if(!(isset($_SESSION['logged-in']))){
    header('Location: log.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
              font-family: Arial;
            }

            * {
              box-sizing: border-box;
            }
            a {
           float: left;
           width: 20%;
           padding: 10px;
           background: #FF5912 ;
           color: white;
           font-size: 17px;
           border: 1px solid grey;
           border-bottom-left-radius: 10px;
           border-top-left-radius: 10px;    
           border-right: none;
           cursor: pointer;
           }

            a:hover {
              opacity: 0.8;
            }

            form input[type=text] {
              padding: 10px;
              font-size: 17px;
              border: 1px solid grey;
              float: left;
              width: 30%;
              background: #f1f1f1;
            }

            form select {
              padding: 10px;
              font-size: 17px;
              border: 1px solid grey;
              float: left;
              width: 30%;
              background: #f1f1f1;
            }

            form  button {
              float: right;
              width: 20%;
              padding: 10px;
              background: #FF5912 ;
              color: white;
              font-size: 17px;
              border: 1px solid grey;
              border-bottom-right-radius: 10px;
              border-top-right-radius: 10px;    
              border-left: none;
              cursor: pointer;
            }

            form  button:hover {
              background: #FF5912;
            }
    </style>
    </head>
    <body>
        <a href="logout.php" target= "_parent" align="center">Logout</a>
        <form  action="page7.php" method="post"  target="frame2">
            <select name="filter" required>
                <option value="">Filter</option>    
                <option value="COMPANY_NAME">COMPANY_NAME</option>
                <option value="CITY">CITY</option>
                <option value="FOLLOW_UP_DATE">FOLLOW_UP_DATE</option>
                <option value="EXHIBITION">EXHIBITION</option>  
              </select>
              <input type="text" placeholder="Search.." name="valueToSearch" required>
              <button type="submit" name="search"><i class="fa fa-search"></i></button>    
        </form>
    </body>
</html> 
