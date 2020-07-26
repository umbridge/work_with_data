<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>designhouse</title>
        <style>
            tr,td
            {
                height:30px;
                margin-top: 30px;
                text-align: left;
            }
            a {
              background-color: #FF5912;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: right;
            }
            a:hover {
              background-color: #FF5912;
            }
            tr:nth-child(odd){background-color: #f2f2f2;}
            tr:hover {background-color: #ddd;}
        </style>
    </head>
    <body>
        <center><h2 class="room-title">DETAILS</h2></center>
        <table>
            <!-- populate table from mysql database --> 
            <?php
            if(isset($_GET['display']))
                {   $company = $_GET['display'];
                    $query = "SELECT * FROM `table 1` WHERE `COMPANY_NAME` LIKE '$company'";
                    $connect = mysqli_connect("localhost", "root", "", "designhousetask");
                    $res = mysqli_query($connect, $query);
                    $row = mysqli_fetch_array($res);  
            ?>
                <tr>
                    <td>COMPANY</td>
                    <td><?php echo $row['COMPANY_NAME'];?></td>
                </tr>
                <tr>    
                    <td>CITY</td>
                    <td><?php echo $row['CITY'];?></td>
                </tr>
                <tr>    
                    <td>PHONE</td>
                    <td><?php echo $row['PHONE'];?></td>
                </tr>
                
                 <tr>
                    <td>NAME</td>
                     <td><?php echo $row['NAME'];?></td>
                </tr>
                 <tr>     
                    <td>ID</td>
                    <td><?php echo $row['EMAIL'];?></td>                    
                </tr>
                <tr>
                   <td>WEBSITE</td>                    
                   <td><?php echo $row['WEBSITE'];?></td>
                </tr>
                <tr>
                    <td>FOLLOW UP</td>
                    <td><?php echo $row['FOLLOW_UP_DATE'];?></td>     
                </tr>
                <tr>
                    <td>TAG</td>
                    <td><?php echo $row['EXHIBITION'];?></td>                    
                </tr>
                <tr>
                    <td>NOTES</td>
                    <td><?php echo $row['NOTES'];?></td>
                </tr>
                <tr>
                 <td><a href="page5.php?edit=<?php echo $row['COMPANY_NAME']; ?>" target="frame4">Edit</a></td> 
                </tr>
            <?php
                 }
            ?>             
            </table>       
    </body>
</html>