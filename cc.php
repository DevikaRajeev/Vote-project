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
            <a href="#">Election</a> 
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
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>


<br>

<div class="row">
  <?php
         
 $connect 		=		mysql_connect("localhost","root","");
 $db 			=		mysql_select_db("vote");
 $et=$_POST['e'];
 $query 		=		"select * from vote_candidate where event='$et' ";
 $result 		=		mysql_query($query,$connect);
 while($res=mysql_fetch_array($result))
			  {
			  $name=$res['name'];
			  $election_title=$res['event'];
			 $photo=$res['photo'];
			 $description=$res['description'];
			 ?>
<div class="column">
    <div class="card">
      <img src="<?php echo $photo ;?>" alt="Jane" style="width:100%">
      <div class="container">
        <h2>&nbsp;&nbsp;<?php echo $election_title; ?></h2>
        <p class="title">&nbsp;&nbsp;<?php echo $name; ?></p>
        <p>&nbsp;&nbsp;<?php echo $description; ?></p>
        
      </div>
    </div>
  </div>
  
  <?php
				}
				?>
  </div>

