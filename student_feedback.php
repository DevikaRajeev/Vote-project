<?php
session_start();
$student=$_SESSION['username'];
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


<?php
//session_start();
//
if(isset($_POST['s']))
{
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("vote");
 $query="select * from user_register where email='$student'";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			$res=mysql_fetch_array($result);
			  
			  $firstname=$res['firstname'];
			  $secondname=$res['secondname'];
			  $email=$res['email'];
			  $dob=$res['dob'];
			  $address=$res['address']; 
		   	  $gender=$res['gender'];
			  $department=$res['dept'];
			  $phonenumber=$res['phone_no'];

$user_name=$_POST['name'];

$user_email=$_POST['email'];
$user_subject=$_POST['sub'];
$user_message=$_POST['msg'];




$query="insert into feedback(name,email,subject,message)values('$user_name','$user_email','$user_subject','$user_message')";
	
	
	      $r=mysql_query($query,$connect);
		 // echo $query ;
		
		if($r>0)
		{
		
		
		//echo"$query";
		echo "<script>alert('feedback sent successfully!!');document.location.href='student_feedback.php';</script>";
		
	}
	else
		{
		echo "<script>alert('Unsuccessfull')</script>";
		
		}
 

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>campus Vote</title>
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
<body>
<div class="page">
<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="brand put-left">
                        <h1>
                            <a href="index.html">
                                <img src="images/campus/download (4).jpeg" height="90" width="90" alt="Logo"/>
                            </a>
                        </h1>
                    </div>
                    <nav class="nav put-right">
                        <ul class="sf-menu">
                            <li  style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_home.php">Home</a></li>
                            <li  style="font-family:Georgia, 'Times New Roman', Times, serif">
                                <a href="student_candidate.php" ><b>Vote</b></a></li>
						    <li  style="font-family:Georgia, 'Times New Roman', Times, serif">
                                <a href="student_result.php">Result</a>
                                
                            </li>
							<li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif">
                                <a href="student_feedback.php">Feedback</a>
                                
                            </li>
                            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_notification.php">Notification</a></li>
                            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<br>

<?php
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("vote");

 $query="select * from user_register where email='$student'";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			$res=mysql_fetch_array($result);
			  
			  $firstname=$res['firstname'];
			  $secondname=$res['secondname'];
			  $email=$res['email'];
			  $dob=$res['dob'];
			  $address=$res['address']; 
		   	  $gender=$res['gender'];
			  $department=$res['dept'];
			  $phonenumber=$res['phone_no'];

?>
	
<div class="row">
							<div class="col-xs-12">

<h3>
          <center>
    <b style="font-family:Georgia">Feedback Form</b>
  </center><br>
        </h3>
	<form method="post" name="form1" id="form1" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" style="padding-left:200px" >
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif"> Name</label>

										<div class="col-sm-9">
											<input type="text" id="fname"  name="name" class="col-xs-10 col-sm-5" value="<?php echo $firstname; ?>&nbsp;<?php echo $secondname ; ?>" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
										</div>
									</div>
                                   



									
							  
							   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Emailid</label>

										<div class="col-sm-9">
											<input type="text" id="email"  name="email" class="col-xs-10 col-sm-5" value="<?php echo $email; ?>" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
										</div>
									</div>
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Subject</label>

										<div class="col-sm-9">
											<input type="text" id="sub"  name="sub" class="col-xs-10 col-sm-5" max="2000-12-31" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
										</div>
									</div>
                                    
                                    
                                   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Message</label>

										<div class="col-sm-9">
											<textarea name="msg" id="msg"   class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" ></textarea>
										</div>
									</div>
                                    
                                   
                                    
                                 
                                    
                                   
                                    
                                         
                                   
									
									

          <div class="col-sm-9">
            <center>
<br />
		<input type="submit" name="s" value="Submit"  class="btn" >
          <input type="reset" value="Reset" name="Reset" class="btn"><br />
                                    </center>
                                    </div>
                                    </form>
									