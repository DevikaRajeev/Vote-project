<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
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
                            
            <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="index.html">Home</a></li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="about.php" ><b>About</b></a></li>
						    
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="">Register</a> 
              <ul>
                <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_register.php">Student</a></li>
                <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_register.php">Candidate</a></li>
              </ul>
            </li>
							
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="">Election</a> 
              <ul>
                <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate.php">Candidate</a></li>
                <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="election_result.php">Election 
                  Result</a></li>
              </ul>
            </li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="login.php">Login</a></li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="contacts.php">Contacts</a></li>
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

<br><br>
<div class="container">

    <div class="row  wrap_5">
	<?php
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  $query="select * from candidate_register ";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  $id=$res['id'];
			  $firstname=$res['firstname'];
			  $secondname=$res['secondname'];
			  $email=$res['email'];
			  $dob=$res['dob'];
			  $address=$res['address']; 
		   	  $gender=$res['gender'];
			  $department=$res['dept'];
			  $discription=$res['discription'];
			  $phonenumber=$res['phone_no'];
			  $mark=$res['percentage_of_mark'];
			  $attendance=$res['percentage_of_attendance'];
			  $photo=$res['photo'];
			
			  
?>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon"><img src="<?php echo $photo; ?>" height="360" width="360"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="#">Budget Planning</a></h3>
                <p class="text_3 color_2 maxheight">
                    Lorem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis
                </p>
                <a class="btn_2" href="#">read more</a></div>
        </div>
        <?php }
	?>
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
                    © <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>