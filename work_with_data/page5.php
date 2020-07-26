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
        <style>
            * {
              box-sizing: border-box;
            }

            input[type=text] {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              resize: vertical;
            }

            label {
              padding: 12px 12px 12px 0;
              display: inline-block;
            }

            input[type=submit] {
              background-color: #FF5912;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: right;
            }

            input[type=submit] :hover {
              background-color: #FF5912;
            }
            a {
              background-color: #FF5912;
              color: white;
              padding: 11px 19px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: left;
            }

            a:hover {
              background-color: #FF5912;
            }

            .container {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
            }

            .col-25 {
              float: left;
              width: 25%;
              margin-top: 6px;
            }

            .col-75 {
              float: left;
              width: 75%;
              margin-top: 6px;
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
        <?php
            if(isset($_GET['edit']))
            {   $company = $_GET['edit'];
                $query = "SELECT * FROM `table 1` WHERE `COMPANY_NAME` LIKE '".$company."'";
                $connect = mysqli_connect("localhost", "root", "", "designhousetask");
                $res = mysqli_query($connect, $query);
                $row = mysqli_fetch_array($res);
        ?>
        <div class="container">
          <form action="page4up.php" method="post">  
              <input type="hidden" name="comp" value="<?php echo $row['COMPANY_NAME'];?>" >
              <div class="row">
                <div class="col-25">
                  <label >COMPANY</label>
                </div>
                <div class="col-75">
                  <input type="text" name="company" value="<?php echo $row['COMPANY_NAME'];?>">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label>CITY</label>
                </div>
                <div class="col-75">
                  <input type="text" name="city" value="<?php echo $row['CITY'];?>">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label>PHONE</label>
                </div>
                <div class="col-75">
                  <input type="text" name="num" value="<?php echo $row['PHONE'];?>">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">NAME</label>
                </div>
                <div class="col-75">
                  <input type="text" name="name" value="<?php echo $row['NAME'];?>">
                </div>
              </div>  
              <div class="row">
                <div class="col-25">
                  <label >WEBSITE</label>
                </div>
                <div class="col-75">
                  <input type="text" name="website" value="<?php echo $row['WEBSITE'];?>">
                </div>
              </div> 
                  <div class="row">
                <div class="col-25">
                  <label >ID</label>
                </div>
                <div class="col-75">
                  <input type="text" name="id" value="<?php echo $row['EMAIL'];?>">
                </div>
              </div>  
              <div class="row">
                <div class="col-25">
                  <label>FOLLOW UP</label>
                </div>
                <div class="col-75">
                      <input type="date" name="folup" value="<?php echo $row['FOLLOW_UP_DATE'];?>">
                </div>
              </div>     
              <div class="row">
                <div class="col-25">
                  <label>TAG</label>
                </div>
                <div class="col-75">
                  <input type="text" name="exhibit" value="<?php echo $row['EXHIBITION'];?>">
                </div>
              </div>           

              <div class="row">
                <div class="col-25">
                  <label>NOTES</label>
                </div>
                <div class="col-75">
                  <input type="text" name="remarks" value="<?php echo $row['NOTES'];?>" style="height:200px">
                </div>
              </div>

              <div class="row">
                  <input type="submit" name="save" value="Save">    
                  <a href="page4.php?display=<?php echo $_GET['edit']; ?>" name="frame4">Cancel</a> 
              </div>
              <?php
                }
              ?>
          </form>
        </div>
    </body>
</html>
