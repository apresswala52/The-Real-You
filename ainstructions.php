<?php include("connection.php"); ?>

<?php
  session_start();
  $query="select * from questions";
  if(!isset($_SESSION['cilentlog'])){
    $user='Guest User';
  }
  else{
  $client=$_SESSION['cilentlog'];
  $user=$client['email'];
  $query1 = "select * from users where email='$user'";
  $result = mysqli_query($conn,$query1);
  $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
  }
  $results = $conn->query($query) or die ($conn->error.__LINE__);
  $total = $results->num_rows;
   if(!isset($_SESSION['total'])){
    $_SESSION['total']=$total;
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Aptitude Test</title>
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
            .form header h2 {
              text-align: center;
              font-size: 1.5em;
              color: #94a9c3;
              font-weight: normal;
            }

    </style>

  </head>
  <body style="background-color: #dfdbd7;">

    <?php 
	include("navbar.php"); 
	?>
      <main>
      <div class="form" style="margin-top: 100px;">
            <header>
              <h1>APTITUDE TEST</h1>
            </header>
            <h3 align="left" style="margin-left: 20px;"><em>Guidelines :-</em></h3>
            <div align="left" style="margin-left: 30px;">
                <ul>
                     <li><strong>Username: </strong><?php echo $user; ?></li>
                    <?php
                    if(!isset($_SESSION['cilentlog'])){?>
                      <li><strong>Test Attempted Earlier: </strong>No</li>
                    <?php
                    }
                    else{?>
                    <li><strong>Test Attempted Earlier: </strong><?php if ($rows['Atest_taken']==1){ echo 'Yes';}else{'No';}; ?></li>
                    <?php
                    }
                    ?>
                    <li><strong>Total Number of Questions: </strong><?php echo $total; ?></li>
                    <li><strong>Time Alloted: </strong><?php echo $total*0.5; ?> minutes</li>
                    <li>Each question carry 1 mark, no negative marks.</li>
                    <li>DO NOT refresh the page.</li>
                </ul>
            </div>
            	 <h3 align="center" style="color: red"><b>ALL THE BEST!!</b></h3>
                <table align="center">
                    <tr>
                        <td align="center" style="color: green;">
                            <h4><b>Click below when you are ready to start the Test</b></h4>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button onclick="begin()" class="button" style="background-color: green;"><span><b>START TEST<b></span></button>
                        </td>
                    </tr>
                </table>
        </div>
    </main>

    <script type="text/javascript">
      function begin(){
        window.location="question.php?n=1";
      }
    </script>
  </body>

</html>