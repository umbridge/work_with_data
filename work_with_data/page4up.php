<?php
session_start();
if(!(isset($_SESSION['logged-in']))){
    header('Location: log.php');
    exit();
}
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
                if(isset($_POST['save']))
               {   
                    $company = $_POST['comp'];
                    $update = true;
                    $city=$_POST['city'];
                    $number=$_POST['num'];  
                    $name=$_POST['name'];
                    $id=$_POST['id'];
                    $website=$_POST['website'];
                    $exhibition=$_POST['exhibit'];
                    $followup=$_POST['folup'];
                    $remarks=$_POST['remarks'];   


                    echo "UPDATE `table` 1 SET CITY='$city' , PHONE='$number' , NAME='$name' ,EMAIL='$id' , WEBSITE='$website' ,FOLLOW_UP_DATE='$followup', NOTES='$remarks' ,EXHIBITION='$exhibition' WHERE COMPANY_NAME='$company'";

                     $connect = mysqli_connect("localhost", "root", "", "designhousetask") ;

                    $query ="UPDATE `table 1` SET CITY='$city' , PHONE='$number' , NAME='$name' ,EMAIL='$id' , WEBSITE='$website' , FOLLOW_UP_DATE='$followup', NOTES='$remarks' , EXHIBITION='$exhibition' WHERE COMPANY_NAME='$company'";

                    mysqli_query($connect, $query) or die( mysqli_error($connect));
                    $querr = "SELECT * FROM `table 1` WHERE `COMPANY_NAME` LIKE '".$company."'";
                    $res = mysqli_query($connect, $querr) or die( mysqli_error($connect));
                    while($row = mysqli_fetch_array($res)):
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
                    <td>REMARKS</td>
                    <td><?php echo $row['NOTES'];?></td>
                </tr>
                <tr>
                    <td><a href="page5.php?edit=<?php echo $row['COMPANY_NAME']; ?>" target="frame4">Edit</a> </td>
                </tr>
                <?php 
                    endwhile;
                    }
                ?>             
            </table>       
    </body>
</html>