<?php include("connection.php"); ?>
<?php
    session_start();
    $type=$_SESSION['type'];
    echo $type;
    if(isset($_SESSION['cilentlog']))
    {
    $user=$_SESSION['cilentlog'];
    $email=$user['email'];
    $query1 = "update users set Ptype='$type' where email='$email'";
    $update = mysqli_query($conn,$query1);
    $query2 = "update users set Ptest_taken=true where email='$email'";
    $test_taken = mysqli_query($conn,$query2);
    }
    $query3 = "select * from types where type='$type'";
    $result = mysqli_query($conn,$query3);
    $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php 
        include('links.php'); 
      ?>
    <style type="text/css">

            .button {
                display: inline-block;
                border-radius: 20px;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 10px;
                width: 250px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
              }

              .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
              }

              .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
              }

              .button:hover span {
                padding-right: 25px;
              }

              .button:hover span:after {
                opacity: 1;
                right: 0;
              }

             .form {
              max-width: 900px;
              background: #fff;
              margin: 1em auto;
              padding-bottom: 1em;
              border-radius: 4px;
              color: #5f7796;
              box-shadow: 0 2px 3px rgba(0, 0, 0, 0.07);
            }
            .form header {
              border-bottom: 3px double #e9e9e9;
              padding: 1em 0;
              padding-bottom: 1em;
            }
            .form header h1 {
              text-align: center;
              font-size: 2.5em;
              color: #5f7796;
              font-weight: bolder;
            }
             .form header h3 {
              text-align: center;
              font-size: 1.2em;
              color: #5f7796;
            }
            .form header h2 {
              text-align: center;
              font-size: 1.8em;
              color: #94a9c3;
              font-weight: normal;
            }
    </style>
  </head>
  <body style="background-color: #dfdbd7;">
      <?php 
        include('navbar.php'); 
      ?>
      <main>

        <div class="form" style="margin-top: 100px;">
            <header>
            <div class="row">
            <div class="col-2 ml-5">
            	<img src="aimage.php?type=<?php echo $type;?>" width="175" height="250" />
            </div>
            <div class="col-8">
              <h2>Your Personality Type is:- </h2>  
              <h1 style="color:red;"><?php echo $_SESSION['type']; ?> - <?php echo $rows['profile']; ?></h1>
              <h2><?php echo $rows['meaning']; ?></h2>
              <h3>You belong to <?php echo $rows['percentage']; ?> population</h3>
            </div>  
        	</div>
            </header>
            <div align="left" style="margin-left: 30px;">
                  <p style="font-size: 1.2em;"><?php echo $rows['description']; ?></p>
                   <?php
                    if(!isset($_SESSION['cilentlog'])){?>
                      <p>For detailed results <a href="register.php"><strong>Login/Register</strong></a> Here</p>
                    <?php
                    }
                    else {?>
                      <p><span style="color: green;">To view detailed results <a href="profile1.php"><strong>Click Here</strong></a></span></p>
                    <?php
                    }?>

                  <div align="center">
                  <button  onclick="home()" class="button" style="background-color: green;"><span>RETURN HOME</span></button>
                  </div>
                  
            </div>
        </div>
      </main>
      <script type="text/javascript">
      function home(){
      	<?php $_SESSION['type']=''; ?>
        window.location="mainpage.php";
      }
    </script>
  </body>
</html>