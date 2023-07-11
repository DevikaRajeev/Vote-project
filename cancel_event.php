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
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("vote");

 $query="select * from vote_candidate where email='$student' and event!='0'";
			  
			  $result=mysql_query($query,$connect);
			 // echo"$query";
			$res=mysql_fetch_array($result);
			  
			  $name=$res['name'];
			  $event=$res['event'];
			  $email=$res['email'];
			  $description=$res['description'];
			  $result=$res['result']; 
			  
			  if($result!=NULL)
			  {
			  echo"<script>alert('Election Event is Expired');document.location.href='candidate_electionevent.php';</script>";
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
		<link rel="stylesheet" type="text/css" href="admin/style.css" />
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
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_home.php">Home</a></li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="candidate_electionevent.php" ><b>Election Event</b></a></li>
						    
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="candidate_vote.php">Vote</a> </li>
							
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"> 
              <a href="candidate_result.php">Result</a> </li>
                            
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_feedback.php">Feedback</a></li>
                            
            <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_notification.php">Notification</a></li>
							 
            <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<br>


	
<div class="content">           
                    
    <div class="center_content">  
    
    <br />
   <h2 style="font-family:Georgia, 'Times New Roman', Times, serif"><b><center>Notification</center></b></h2> 
                    
     <br /> <center>       
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
<thead>
    	<tr>
        	
            <th scope="col" style="font-family:Georgia;" class="rounded">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th scope="col" style="font-family:Georgia;" class="rounded">Event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th scope="col" style="font-family:Georgia;" class="rounded">description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th scope="col" style="font-family:Georgia;" class="rounded">Reason&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th scope="col" style="font-family:Georgia;" class="rounded"></th>
           
                    </tr>
    </thead>
<?php
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  $query="select * from vote_candidate where email='$student' and event!='0'";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  $id=$res['id'];
			  $name=$res['name'];
			  $event=$res['event'];
			  $email=$res['email'];
			  $description=$res['description'];
			  $r=$res['reason']; 
			  
?>
   
    <tbody>
    	
        
    	<tr>
        <form action="" method="post">	
            <td style="font-family:Georgia;"><?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td style="font-family:Georgia;"><?php echo $email ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:Georgia;"><?php echo $event ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:Georgia;"><?php echo $description ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:Georgia;"><?php echo $r ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:Georgia;"><input type="submit" name="ss" value="Send Reason" class="btn" style="width:120px;height:30px;"><input type="hidden" name="hid" value="<?php echo $id ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </form>
            
        </tr>    
        
    </tbody>

	<?php
	}
	?>
	
	
	<?php
	
	if(isset($_POST['ss']))
{
	$hid=$_POST['hid'];
	

 
  // $query="update car_details set car_type='economy' ";
   $query="select * from vote_candidate where id='$hid'";
$res=mysql_query($query,$connect);
	while($fet=mysql_fetch_array($res))
{
    //$idn=$fet['id'];
     // output data of each row
    $id=$fet['id'];
	 $name=$res['name'];
			  $event=$res['event'];
			  $email=$res['email'];
			  $description=$res['description'];
			  $r=$res['reason']; 
//$car_image=$fet['car_image']; 
echo"<form action='' method='post' enctype='multipart/form-data'>";
echo"

								<div class='form-group'>
                              <label class='col-sm-2 col-sm-2 control-label'><b>Reason</b></label>
                              <div class='col-sm-10'>
                                  <input type='text' name='n'  id='n' required='required' value='$r'/>
                                </div>
                                </div><br><br>

                                   <br><center>
								
								
								
								";
								
								echo"<input type='hidden' name='idn' value='$id'>";
								echo"<input type='submit' name='subupdate1' value='Send' class='btn btn-blue'>";
							echo"</form>";

	}
}
		echo"<form action='' method='post' enctype='multipart/form-data'>";

 if(isset($_POST['subupdate1']))
 {
	$id11=$_POST['idn'];
	 
     
$re=$_POST['n'];




$query	="update vote_candidate set reason='$re' where id='$id11'";
$res=mysql_query($query,$connect);
if($res>0)
{
echo"<script>document.location.href='candidate_electionevent.php';</script>";
}
		} 
	?>
</table>
 <br><br><br><br><br><br>
      
    </center>
    <!-- end of right content-->
            
         </div></div>           
  </div>   <!--end of center content -->               
                    
    </div>              
    
 <footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    ? <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>
