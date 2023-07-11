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
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="admin/style.css" />
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
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="student_candidate.php" ><b>Vote</b></a></li>
						    
            <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="student_result.php">Result</a> </li>
							
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="student_feedback.php">Feedback</a> </li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_notification.php">Notification</a></li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========================================================
                          CONTENT
=========================================================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>
<div class="camera-wrapper">
   
       
            <div class="fadeIn camera_caption">
                
               
            </div>
        </div>
		        
            <div class="fadeIn camera_caption">
                
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row  wrap_5">
        <div class="grid_3">
            <div class="box_1">
               
                
        </div>
        <div class="grid_3">
            <div class="box_1">
               
                
        </div>
        <div class="grid_3">
            <div class="box_1">
                
               </div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                </div>
        </div>
    </div>
</div>

<div class="bg_1 wrap_7 wrap_5">
    <div class="container">
        <div class="row">
            <div class="grid_12">
               
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
                <div id="owl">
                    <div class="item">
                        <p class="text_3">
                          <center> <table border="3" id="rounded-corner" summary="2007 Major IT Companies' Profit">
<thead>
    	<tr>
        	
            <th scope="col" style="font-family:Georgia;" class="rounded">Name</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Email</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Photo</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Election Event</th>
			<th scope="col" style="font-family:Georgia;" class="rounded">Note</th>
			<th scope="col" style="font-family:Georgia;" class="rounded">No. Of Vote</th>
                    </tr>
    </thead>
<?php
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  $result=$_POST['result'];
			  $query="select * from vote_candidate where event='$result'";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  $name=$res['name'];
			  $email=$res['email'];
			  $photo=$res['photo'];
$description=$res['description'];
$votecount=$res['votecount'];
$event=$res['event'];
 
?>
   
    <tbody>
    	
        
    	<tr>
        	
            <td style="font-family:Georgia;"><?php echo $name ; ?>&nbsp;</td>
            <td style="font-family:Georgia;"><?php echo $email ; ?>&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:Georgia;"><img src="<?php echo $photo ; ?>" height="30" width="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			
            <td style="font-family:Georgia;"><?php echo $event ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:Georgia;"><?php echo $description ; ?>&nbsp;&nbsp;</td>
            <td style="font-family:Georgia;"><?php echo $votecount ;?>&nbsp;&nbsp; </td>
			
            
        </tr>    
        
    </tbody>
	<?php
	}
	?></center>
</table>
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wrap_9 wrap_4 wrap_10">
        <div class="grid_12">
            <div class="header_1 wrap_3 color_3">
                Get in Touch
            </div>
            <div class="box_3">
                <ul class="list_1">
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                    <li><a class="fa fa-pinterest" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    ? <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by <a href="http://www.mycampus.com/" rel="nofollow">mycampus.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>
