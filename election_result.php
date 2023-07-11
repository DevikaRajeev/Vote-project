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
                            
          <li  style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="index.html">Home</a></li>
                            
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="about.php" ><b>About</b></a></li>
						    
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="">Register</a> 
            <ul>
              <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_register.php">Student</a></li>
              <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_register.php">Candidate</a></li>
            </ul>
          </li>
							
          <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"> 
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
<div class="container">
    <div class="row  wrap_5">
        <div class="grid_3">
            


<div class="bg_1 wrap_7 wrap_5">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2 class="header_1 wrap_8 color_3">
                    "Students Listen Here Vote Result are Annouced here.."
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
			<?php
         
 $connect 		=		mysql_connect("localhost","root","");
 $db 			=		mysql_select_db("vote");
 
 $query 		=		"select * from result ";
 $result 		=		mysql_query($query,$connect);
 while($res=mysql_fetch_array($result))
			  {
			  $name=$res['name'];
			  $election_title=$res['event'];
			 $photo=$res['photo'];
			 $discription=$res['discription'];
			 ?>
                <div id="owl">
				
				
                    <div class="item">
					 
                        
              <p class="text_3"> <font size="+3"> <strong> <font face="Georgia, Times New Roman, Times, serif"><?php echo $discription; ?><br><center><img src="<?php echo $photo; ?>" height="300px" width="300px"><br><form action="leading.php" method="post">
  
    <center>
      
      <input type="submit" value="View Leading"  name="Submit"  class="btn" >
      <input type="hidden" name="result" value="<?php echo $election_title ; ?>">
      
    </center>
  
</form>	</center></strong></font> 
                </font> <br/>
                           
                        </p>
						
                    </div>
					
                    </div>
            <?php
						}
						?>
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
                    © <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by <a href="http://www.mycampus.com/" rel="nofollow">mycampus.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>