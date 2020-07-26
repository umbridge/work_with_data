<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
?>
<?php
if(isset($_GET['value']))
{   $valueToSearch = $_GET['value'];
    if(isset($_GET['attribute']))
    {
        $att=$_GET['attribute'];        
        $query = "SELECT `$att` FROM `table 1` WHERE `COMPANY_NAME` LIKE '%".$valueToSearch."%'or `CITY` LIKE '%".$valueToSearch."%' or `EXHIBITION` LIKE '%".$valueToSearch."%' or `FOLLOW_UP_DATE` LIKE '%".$valueToSearch."%'";
        $connect = mysqli_connect("localhost", "root", "", "designhousetask");
        $res = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($res)):
            echo $row[$att];
            echo "<br>";
        endwhile;
    }
}
?>