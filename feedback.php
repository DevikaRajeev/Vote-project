<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
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
    
    <div class="right_header">Welcome Admin, <a href="#">Visit site</a> | <a href="#" class="messages">(3) Messages</a> | <a href="#" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <br /><br /> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		
    
            <div class="sidebarmenu">
            
                <a class="menuitem" href="admin_home.php">Home</a>
               
                <a class="menuitem" href="student_details.php" >Student details</a>
                 
                <a class="menuitem" href="candidate_details.php">Candidate details</a>
               
          
				<a class="menuitem submenuheader" href="">Election</a>
                <div class="submenu">
                    <ul>
                    <li><a href="">Election Event</a></li>
                    <li><a href="">Vote Details</a></li>
                    <li><a href="">Result</a></li>
                    </ul>
                </div>

                <a class="menuitem" href="notification.php">Notification</a>
                
                <a class="menuitem" href="feedback.php">Feedback</a>
                
                    
            </div>
            
            
            <div class="sidebar_box">
               
                
               
            </div>
            
            <div class="sidebar_box">
               
            </div>
            
            <div class="sidebar_box">
                
            </div>  
            
            <div class="sidebar_box">
                
            </div>
              
    
    </div>   
    
    <div class="right_content">            
        
    <h2>Products Categories Settings</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
<thead>
    	<tr>
        	
            <th scope="col" class="rounded">Name</th>
            <th scope="col" class="rounded">Email</th>
            <th scope="col" class="rounded">Subject</th>
            <th scope="col" class="rounded">Message</th>
                    </tr>
    </thead>
<?php
 $connect=mysql_connect("localhost","root","");
	          $db=mysql_select_db("vote");
			  $query="select * from feedback ";
			  
			  $result=mysql_query($query,$connect);
			  //echo"$query";
			  while($res=mysql_fetch_array($result))
			  {
			  
			  $name=$res['name'];
			  $email=$res['email'];
			  $subject=$res['subject'];
			  $message=$res['message'];
			  
?>
   
    <tbody>
    	
        
    	<tr>
        	
            <td><?php echo $name ; ?></td>
            <td><?php echo $email ; ?></td>
            <td><?php echo $subject ; ?></td>
            <td><?php echo $message ;?> </td>
            
        </tr>    
        
    </tbody>
	<?php
	}
	?>
</table>

	
        <!-- end of right content-->
            
                    
 </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">MYCAMPUS| Powered by <a href="http://indeziner.com">MyCAMPUS</a></div>
    	<div class="right_footer"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>