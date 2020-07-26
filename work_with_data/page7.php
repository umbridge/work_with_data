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
        
           #customers {
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              position: absolute; 
              left: 0; 
              overflow-x: hidden; 
              overflow-y: scroll; 
              table-layout: fixed;
              width: 100%; 
            }
            #customers::-webkit-scrollbar { 
                display: none; 
            } 
            #customers td, #customers th {
              border: 1px solid #ddd; 
                white-space: normal;
                word-wrap: break-word;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: center;
              background-color: #FF5912;
              color: white;
            }            
            .container{
                width: 100%;
                position: relative;
            }
            
        </style>
    </head>
    
    <body>
        
        <div class="container">
            <center><h2 class="room-title">RESULTS</h2></center>
            <table id="customers">
                <!-- populate table from mysql database -->  
                <?php
                    if(isset($_POST['valueToSearch']))
                    {   $valueToSearch = $_POST['valueToSearch'];
                        $filter = $_POST['filter'];                        
                        $connect = mysqli_connect("localhost", "root", "", "designhousetask");
                        $query = "SELECT * FROM `table 1` where ".$filter." like '".$valueToSearch."' "; 
                        $res = mysqli_query($connect, $query) or die( mysqli_error($connect));
                ?>
                <tr>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=COMPANY_NAME" target="frame2">COMPANY</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=CITY" target="frame2">CITY</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=PHONE" target="frame2">PHONE</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=NAME" target="frame2">NAME</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=EMAIL" target="_blank">ID</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=WEBSITE" target="frame2">WEBSITE</a></th> 
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=FOLLOW_UP_DATE" target="frame2">FOLLOW UP</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=EXHIBITION" target="frame2">EXHIBITION</a></th>
                    <th><a href="message.php?value=<?php echo $_POST['valueToSearch'];?>&attribute=NOTES" target="frame2">NOTES</a></th>
                    <th>ACTION</th>
                </tr>
                <?php
                while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)):?>
                <tr>    
                    <td><?php echo $row['COMPANY_NAME'];?></td>
                    <td><?php echo $row['CITY'];?></td>
                    <td><?php echo $row['PHONE'];?></td>
                    <td><?php echo $row['NAME'];?></td>
                    <td><?php echo $row['EMAIL'];?></td> 
                    <td><?php echo $row['WEBSITE'];?></td>
                    <td><?php echo $row['FOLLOW_UP_DATE'];?></td>
                    <td><?php echo $row['EXHIBITION'];?></td>
                    <td><?php echo $row['NOTES'];?></td>
                    <td style="text-align:center;"><a href="page2.php?display=<?php echo $row['COMPANY_NAME']; ?>" target="frame2">Edit</a>/<a href="deleterec.php?delete=<?php echo $row['COMPANY_NAME']; ?>" target="frame2">Delete</a></td>
                </tr>
                <?php endwhile;
                    }
                ?>
            </table>  
        </div>
    </body>
</html>