<?php
    session_start();
    if(isset($_SESSION['logged-in']))
    {
        header('Location: main frame.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;
            background-image: url(white-abstract-orange-background-eps-10-vector-23527052.jpg);
            }
            
            form 
            {
                
                width: 50%;
                height:50%;
                margin: 5% 25% 5% 25%;
            }
            
            input[type=text], input[type=password] 
            {
              width: 100%;
              padding: 2% 2%;
              margin: 2% 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
              border-radius: 10px;    
            }

            input[type=submit] {
              background-color: #FF5912;
              color: white;
              
              margin: 0.5%;
              font-size: 40px;    
              text-emphasis: Login;
              border-radius: 10px;    
              border: none;
              cursor: pointer;
              width: 100%;
            }

            input[type=submit]:hover {
              opacity: 0.8;
            }

            .imgcontainer {
              text-align: center;

            }

            img.avatar 
            {
              width: 40%;
              border-radius: 50%;
            }

            .container 
            {
              padding: 0%;
               
            }
            
        </style>
        
    </head>
    
    <body>
        <form action="loginvalidation.php" method="post">
            <div class="container">
                <div class="imgcontainer">
                    <img src="One_User_Orange.png" alt="Avatar" class="avatar">   
                </div>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <input type="submit" value="Login" name="submit">
            </div>
        </form>

    </body>
</html>
