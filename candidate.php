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
                            
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="about.php" ><b>About</b></a></li>
						    
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="">Register</a> 
            <ul>
              <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_register.php">Student</a></li>
              <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_register.php">Candidate</a></li>
            </ul>
          </li>
							
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="#">Election</a> 
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
<div class="camera-wrapper">
    <div id="camera" class="camera-wrap">
        <div data-src="images/index-2_img02.jpg">
		
            <div class="fadeIn camera_caption">
			       <?php
 $connect 		=		mysql_connect("localhost","root","");
 $db 			=		mysql_select_db("vote");
 $query 		=		"select * from election_event";
 $result 		=		mysql_query($query,$connect);
 while($res=mysql_fetch_array($result))
			  {
			  $election_id=$res['election_id'];
			  $election_title=$res['election_title'];
			 ?>
                <h1 ><form action="cc.php" method="post" class="btn" ><input type="submit"  value="<?php echo $election_title; ?>" class="btn" /><input type="hidden" name="e" value="<?php echo $election_title; ?>"></form></h1>
               <?php
			   }
			   ?> 
            </div>
        </div>
		
        
    </div>
<br><br>
<br><br><br>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>