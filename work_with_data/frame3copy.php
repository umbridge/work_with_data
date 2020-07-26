<?php
session_start();
if(!(isset($_SESSION['logged-in']))){
    header('Location: log.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <?php
    if(isset($_POST['save'])){
        if(isset($_POST['company'])){
            $company = $_POST['company'];        
            $update = true;
            $status=$_POST['status'];
            $profile=$_POST['profile'];  
            $size=$_POST['size'];
            $owner=$_POST['owner'];
            $modby=$_POST['modby'];
            $followup=$_POST['folup'];
            $remarks=$_POST['remarks'];
            
            $connect = mysqli_connect("localhost", "root", "", "designhousetask") ;   
            $que="INSERT INTO `middletable`(`MID_COMPANY_NAME`) VALUES ('$company')";            
            $res=mysqli_query($connect, $que) or die( mysqli_error($connect));
            $query ="UPDATE MiddleTable SET MID_COMPANY_NAME='$company' , STATUS='$status' ,  	PROFILE='$profile' ,SIZE ='$size' , OWNER ='$owner' ,MODIFIED_BY='$modby', FOLLOW_UP='$followup' , 	REMARKS='$remarks' WHERE MID_COMPANY_NAME='$company'";
            
            mysqli_query($connect, $query) or die( mysqli_error($connect));
            echo "data save successfully"  ; 
           }
           else
           {
               echo "enter details";
           }
       }
    ?>
    <head>
        <style>
            * {
              box-sizing: border-box;
            }

            input[type=text], input[type=date], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
            }

            label {
              padding: 0% 1% 0% 1%;
              display: inline-block;
            }

            input[type=submit] {
              background-color: #FF5912;
              color: white;
              padding: 1% 2%;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: right;
            }

            .container {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 2%;
            }

            .col-25 {
              float: left;
              width: 25%;
              margin-top: 2%;
            }

            .col-75 {
              float: left;
              width: 75%;
              margin-top: 1%;
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
        </style>
    </head>
    <body>

        <div class="container">
          <form action="#" method="post">
              <div class="row">
            <div class="col-25">
              <label >Company Name</label>
            </div>
            <div class="col-75">
              <input type="text" name="company">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Status</label>
            </div>
            <div class="col-75">
              <select id="country" name="status">
                <option value="">Status</option>    
                      <option value="Follow Up">Follow Up</option>
                      <option value="Details">Details</option>
                      <option value="Design">Design</option>
                      <option value="Element Sheet/Quote">Element Sheet/Quote</option>
                      <option value="WON">WON</option>
                      <option value="NI">NI</option>    
              </select>
            </div>
          </div> 
          <div class="row">
            <div class="col-25">
              <label>Profile</label>
            </div>
            <div class="col-75">
              <select id="country" name="profile">
                <option value="">Profile</option>    
                      <option value="Mailed">Mailed</option>
                      <option value="Whatsapped">Whatsapped</option>
              </select>
            </div>
          </div>      
          <div class="row">
            <div class="col-25">
              <label >Size</label>
            </div>
            <div class="col-75">
              <input type="text" name="size">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Owner</label>
            </div>
            <div class="col-75">
              <input type="text" name="owner">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Modified By</label>
            </div>
            <div class="col-75">
              <input type="text" name="modby">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Follow Up</label>
            </div>
            <div class="col-75">
              <input type="date" name="folup">
            </div>
          </div>      

          <div class="row">
            <div class="col-25">
              <label>Remarks</label>
            </div>
            <div class="col-75">
              <textarea  name="remarks" style="height:90px;"></textarea>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Save" name="save">
          </div>
          </form>
        </div>
        
    </body>
    
</html>
