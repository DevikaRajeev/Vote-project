<?php
session_start();
$candidate=$_SESSION['username'];
if(isset($_SESSION['username']))
{
//echo $_SESSION['username'];
}
else
{
echo "<script>alert('you must login first!!..');document.location.href='login.php';</script>";
//header("Location:dcrs/Login.php");
echo"this document is protected";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets2/font-awesome/4.5.0/css/font-awesome.min.css" />
		
		<link rel="stylesheet" href="assets2/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets2/css/ace-rtl.min.css" />
		<script src="assets2/js/ace-extra.min.js"></script>

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="js/camera.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body><div class="page">
<!--========================================================
                          HEADER
=========================================================-->
<header id="header"> 
<div id="stuck_container"> 
  <div class="container"> 
    <div class="row"> 
      <div class="grid_12"> 
        <div class="brand put-left"> 
          <h1> <a href="index.html"> <img src="images/campus/download (4).jpeg" height="90" width="90" alt="Logo"/> 
            </a> </h1>
        </div>
        <nav class="nav put-right"> 
        <ul class="sf-menu">
          <li  style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_home.php">Home</a></li>
          <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"> 
            <a href="candidate_electionevent.php" ><b>Election Event</b></a></li>
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="candidate_vote.php">Vote</a> 
          </li>
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="candidate_result.php">Result</a> 
          </li>
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_feedback.php">Feedback</a></li>
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_notification.php">Notification</a></li>
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="logout.php">Logout</a></li>
        </ul>
        </nav> </div>
    </div>
  </div>
</div>
</header> 
<br><br>
<font face="Georgia, Times New Roman, Times, serif"><form action="cancel_event.php" method="post" style="padding-left:1200px;"><input type="submit" name="cancel" value="Cancel My Nomine Reguest" class="" style="width:300px;height:50px;"></form></font> 
<?php
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  $query="select * from election_event ";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  
			  $election_title=$res['election_title'];
			  $election_date=$res['election_date'];
			  
			  
?>
<form action="event_candidate_form.php" method="post">
<div class="col-sm-9"> 
  <center>
    <br />
    <input type="submit" value="<?php echo $election_title ;?>" name="submit"  class="btn" ><input type="hidden" name="hid" value="<?php echo $election_title ;?>">
    
    <br />
  </center>
									</div></form>									<?php
 
  
  }
  ?>
                                    

                                    
									

<footer id="footer" class="color_9"> 
<div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    � <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by <a href="http://www.mycampus.com/" rel="nofollow">mycampus.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>