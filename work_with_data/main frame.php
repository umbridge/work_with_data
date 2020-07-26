<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: log.php');
        exit();
    }
?>
<!DOCTYPE html> 
<html>                 
               <frameset rows="10%,*"> 
                    <frame src="frame1.php"> 
                    <frame src="frame6.html" name="frame2"> 
                </frameset>
</html>

