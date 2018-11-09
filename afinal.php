<?php include("connection.php"); ?>
<?php
    session_start();
    $score=$_SESSION['score'];
    if(isset($_SESSION['cilentlog']))
    {
    $user=$_SESSION['cilentlog'];
    $email=$user['email'];
    $query1 = "update users set ASCORE=$score where email='$email'";
    $update = mysqli_query($conn,$query1);
    $query2 = "update users set Atest_taken=true where email='$email'";
    $test_taken = mysqli_query($conn,$query2);
    }
	  $query="select * from shouts order by time desc limit 100";
	  $shouts = mysqli_query($conn,$query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Results</title>
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
        include($_SERVER['DOCUMENT_ROOT'].'/user/navbar.php'); 
      ?>
      <main>

      <div class="form" style="margin-top: 100px;">
            <header>
              <h1>RESULTS</h1>
              <h2>Score - <?php echo $score; ?>/<?php echo $_SESSION['total']; ?></h2>
            </header>
            <div align="center" style="margin-left: 30px;">
                   <?php
                    if(!isset($_SESSION['cilentlog'])){?>
                      <p style="font-size: 1.2em;">Your recent score has been updated to the database.</p>
                      <p style="font-size: 1.2em;">To view the details <a href="profile.php"><strong>Click Here</strong></a></p>
                    <?php
                    }
                    else {?>
                      <p><span style="color: green;">To record your results <a href="register.php"><strong>Click Here</strong></a></span></p>
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
        <?php $_SESSION['score']=0; ?>
        window.location="mainpage.php";
      }
    </script>
  </body>
</html>