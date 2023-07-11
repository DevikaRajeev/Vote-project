<?php
//session_start();
//
if(isset($_POST['submit']))
{
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("vote");


$user_name=$_POST['name'];

$user_email=$_POST['email'];
$user_phone=$_POST['phone'];
$user_message=$_POST['message'];



$query="insert into contact(name,email,phone,message)values('$user_name','$user_email','$user_phone','$user_message')";
	
	
	      $r=mysql_query($query,$connect);
		  
		
		if($r>0)
		{
		
		
		//echo"$query";
		echo "<script>alert('You have send successfully!!');document.location.href='contacts.php';</script>";
		
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
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/modal.js'></script>
    <script src='js/TMForm.js'></script>
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
                            
            <li  style="font-family:Georgia, 'Times New Roman', Times, serif"> 
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
                            
            <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="contacts.php">Contacts</a></li>
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
        
        <div class="bg_1 wrap_17 wrap_19">
            <div class="container">
                
                <div class="row">
                    <div class="grid_6">
                        <div class="wrap_18">
                            <h2 class="header_2 indent_5">
                                Contact Info
                            </h2>
                            <address>
                                <p class="text_7 color_6">
                                    Liberal Arts College
                                </p>
                               
                                    Changanassery,Kottayam,Kerala 670110 <br/>
                                    +9945 2341 5674 <br/>
                                    0490 2345987  <br/>
                                    Mon to Fri 9am to 5 pm  <br/>
                                    E-mail: <a href="#">mycampus@gmail.com</a>
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="grid_6">
                        <div class="wrap_18">
                            <h2 class="">
                                Contact Form
                            </h2>
                            <form id="" method="post">
                                <div class=""></div>
                                <fieldset>
                                    <div class="row">
                                        <div class="grid_2">
                                            <label class="name">
                         <input type="text" name="name"placeholder="Name:" />
                                                
                                            </label>
                                        </div>
                                        <div class="grid_2">
                                            <label class="email">
                     <input type="text" name="email" placeholder="E-mail:"/>
                                                
                                            </label>
                                        </div>
                                        <div class="grid_2">
                                            <label class="phone">
        <input type="text" name="phone" placeholder="Phone:" />
                                                
                                            </label>
                                        </div>
                                    </div>
                                    <label class="message">
           <textarea name="message" placeholder="Message:"></textarea>
                                       
                                    </label>
                                    <div class="btn-wrap">
                     <input type="submit" name="submit" value="send" class="btn_3" >
                       
                                    </div>
                                </fieldset>
                                
                            </form>
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