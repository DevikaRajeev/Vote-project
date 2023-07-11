<?php
session_start();
if(isset($_SESSION['username']))
{
//echo $_SESSION['username'];
}
else
{
echo "<script>alert('you must login first!!..');document.location.href='../login.php';</script>";
//header("Location:dcrs/Login.php");
echo"this document is protected";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Campus Vote</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="../images/campus/download (4).jpeg" height="60" width="65" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="logout.php">Visit site</a> | <a href="feedback.php" class="messages">Messages</a> | <a href="logout.php" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a href="admin_home.php">Admin Home</a></li>
                    <li><a href="student_details.php">Student Details<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="candidate_details.php">Candidate Details<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        </li>
                               
                    <li><a href="" class="current">Election<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                        <ul>
                        <li><a href="election_event.php" title="">Election Event</a></li>
                        <li><a href="vote_details.php" title="">Voteing Details</a></li>
                        <li><a href="admin_result.php" title="">Result</a></li>
                    
                        </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                    </li>
                    <li><a href="notification.php">Notification<!--[if IE 7]><!--></a><!--<![endif]-->
                   </li>
				   <li><a href="feedback.php">Feedback<!--[if IE 7]><!--></a><!--<![endif]-->
                   </li>
				    </div> 
                    
                    
           <div class="right_content">           
                    
    <div class="center_content">  
    
    <br />
   <h2 style="font-family:Georgia, 'Times New Roman', Times, serif"><b>Vote Event</b></h2> 
                    
     <br />        
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
<thead>
    	<tr>
        	
            <th scope="col" style="font-family:Georgia;" class="rounded">Name</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Email</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Photo</th>
            <th scope="col" style="font-family:Georgia;" class="rounded">Election Event</th>
			<th scope="col" style="font-family:Georgia;" class="rounded">Note</th>
                    </tr>
    </thead>
<?php
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  $query="select * from vote_candidate ";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  $name=$res['name'];
			  $email=$res['email'];
			  $photo=$res['photo'];
$description=$res['description'];
 $title1=$_POST['htitle'];
?>
   
    <tbody>
    	
        
    	<tr>
        	<form action="view_candidate.php" method="post">
            <td style="font-family:Georgia;"><?php echo $name ; ?></td>
            <td style="font-family:Georgia;"><?php echo $email ; ?></td>
			<td style="font-family:Georgia;"><img src="<?php echo $photo ; ?>" height="60" width="60"></td>
			
            <td style="font-family:Georgia;"><?php echo $htitle ; ?></td>
            <td style="font-family:Georgia;"><?php echo $description ;?> </td>
			
            
        </tr>    
        </form>
    </tbody>
	<?php
	}
	?>
</table>

      
    
    <!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
    </div>                
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
    	<div class="right_footer"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>