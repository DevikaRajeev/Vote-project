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
	<link href="voting.css" type="text/css" rel="stylesheet" />
<script src="jscript/gen_validatorv4.js" type="text/javascript"></script>

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
                            
            
          <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"> 
            <a href="student_candidate.php" ><b>Vote</b></a></li>
						    
            
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="student_result.php">Result</a> 
          </li>
							
            
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="student_feedback.php">Feedback</a> 
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
<div id="cover"> 
  <div id="content"> 
  <?php
  
  $today=date('Y-m-j');
  ?>
    <h4><center>Hellow,&nbsp;<?php echo $candidate ;?></center><br />
    </h4>
    <br/>
    <h3><Make a vote.</h3>
    <div id="login"> 
      <table width="100%">
	
  <?php
  $hid=$_POST['w'];
$connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			   
			  $query="select * from election_event where election_title='$hid'";
			  
			  $result=mysql_query($query,$connect);
			 //echo"$query";
$res=mysql_fetch_array($result);
			 $edate=$res['election_date'];
			  $enddate=$res['election_end_date'];
			  $election_title=$res['election_title'];

 
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			   
			  $query="select * from vote_candidate where event='$hid'";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  
	
			  $id=$res['id'];
			  $name=$res['name'];
			 // $secondname=$res['secondname'];
			  $email=$res['email'];
			  $photo=$res['photo'];
			  $event=$res['event'];
			  //$etype=$res['event'];
			  //$name="$firstname"."$secondname";
			  

?>
<form action="" name="vote" method="post" id="myform">

<tr>
<td align="left"><img src="<?php echo $photo; ?>" width="200px" height="100%"><br><br></td>
<td align="left">
<input type="radio" name="can" value="<?php echo $name;?>" /><?php echo $name;?>
<input type="hidden" name="ee" value="<?php echo $hid ; ?>"></td>

</td>
</tr>

<?php
		
		}
		
		?>
		<tr><td align="center"><input type="submit" value="MAKE A VOTE" name="p"/></td>
</tr>
</form>

<?php
$connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  



if(isset($_POST['p']))
{
$ee=$_POST['ee'];
$sql = "SELECT * FROM user_register WHERE email='$_SESSION[username]' AND vote_event='$ee' AND status='VOTED'";
$result = mysql_query($sql);

			if (mysql_num_rows($result)==1){
	    //Login User already voted:
	   // echo $cand1;
	   echo"<script>alert('You have already been voted, No need to vote again');document.location.href='student_home.php';</script>";
        
	        }
					
			else{
			
			 $sql = 'UPDATE vote_candidate SET votecount = votecount + 1 WHERE name = "'.$_POST['can'].'" ';
         
            $sql2 = "UPDATE user_register SET status='VOTED',vote_event='$ee' WHERE email='$_SESSION[username]' ";
               

            $result = mysql_query($sql);
            $result2 = mysql_query($sql2);
	if(!$result && !$result2){
	die("Error on mysql query".mysql_error());
	}
	else{
	echo"<script>alert('Congratulation, you have made your vote.');document.location.href='student_home.php';</script>";
	//echo"$msg1";
	}
			}
	


}
$today=date('Y-m-j');

if($enddate<$today)
{
echo"<script>alert('The $election_title election vote time is Closed!!');document.location.href='student_home.php';</script>";
exit(0);//document.location.href='candidate_home.php';
} 
  ?>

        <script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select president candidate to vote for.");
 frmvalidator.addValidation("vice1","req","Please select vice candidate to vote for.");  
</script>
      </table>
    </div>
  </div>
</div>
