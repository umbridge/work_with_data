<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html> 
<html> 
    <frameset cols="60%,40%"> 
        <frame src="frame3copy.php" name="frame3"> 
        <frame src="page4.php?display=<?php echo $_GET['display']; ?>" name="frame4"> 
    </frameset>    
</html>
