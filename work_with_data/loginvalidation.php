<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $user = $_POST['uname'];
        $password = $_POST['psw'];
        if($user== 'admin'){
            if($password == 'password'){
                $_SESSION['logged-in'] = true;       
                $_SESSION['user'] = $user;           
                unset($_SESSION['loginError']);
                header('Location: main frame.php');
            }
         }
    }
    else{
        $_SESSION['loginError'] = '<span class="error-msg">Invalid inputs.</span>';
        header('Location: log.php');
    }
?>