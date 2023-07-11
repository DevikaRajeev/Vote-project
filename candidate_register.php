<?php
//session_start();
//
if(isset($_POST['fname']))
{
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("vote");


$user_fname=$_POST['fname'];
$user_lname=$_POST['lname'];
$user_email=$_POST['email'];
$user_dob=$_POST['dob'];
$user_address=$_POST['address'];
$user_sex=$_POST['gender'];
$dept=$_POST['dept'];
$user_dis=$_POST['discription'];
$user_phno=$_POST['pno'];
$user_mark=$_POST['mark'];
$user_attendance=$_POST['attendance'];

$source=$_FILES['image']['tmp_name'];
$destination="upload/".$_FILES['image']['name'];
move_uploaded_file($source,$destination);

$user_password=$_POST['pword'];
$user_cpassword=$_POST['confirm_password'];
$status='0';
$name="$user_fname"."$user_lname";




if($user_password==$user_cpassword)
{
$query="insert into candidate_register(firstname,secondname,email,dob,address,gender,dept,discription,phone_no,percentage_of_mark,percentage_of_attendance,photo,password,reenter_password,status,astatus)values('$user_fname','$user_lname','$user_email','$user_dob','$user_address','$user_sex','$dept','$user_dis','$user_phno','$user_mark','$user_attendance','$destination','$user_password','$user_cpassword','','Pending')";

	
	
	      mysql_query($query,$connect);
		  //echo $query;
		$r=0;
	    $r += mysql_affected_rows($connect);
			
		if($r == 1)
		{
$query="insert into login(username,password,usertype,status)values('$user_email','$user_password','candidate','$status')";
	

//	$query="insert into student_register(student_name,student_address,student_gender,student_dob,student_email,student_phno,student_course,student_adno,student_adyr,student_nation,student_username,student_passwrd,cpassword,student_pname,student_date)values('$student_name','$student_address','$student_gender','$student_dob','$student_email','$student_phno','$student_course','$student_adno','$student_adyr','$student_nation','$student_username','$student_passwrd','$confirmpassword','$student_pname','$student_date')";
// echo $query;
 mysql_query($query,$connect);
 

		$r += mysql_affected_rows($connect);

		//echo $r;

		if($r==2 )
		{
		
		$query="insert into vote_candidate(name,email,photo,event,description,votecount,result,reason)values('$user_fname','$user_email','$destination','0','0','0','','0')";

	
	
	      mysql_query($query,$connect);
		  $r += mysql_affected_rows($connect);

		//echo $r;

		if($r==3 )
		{

		//echo"$query";
		echo "<script>alert('Registerd successfully!! Must Login..');</script>";
		
	}
	else
		{
		echo "<script>alert('Unsuccessfull')</script>";
		
		}
 

}
}
}
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
                            
          <li  style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="index.html">Home</a></li>
                            
          <li  style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="about.php" ><b>About</b></a></li>
						    
          <li class="current" style="font-family:Georgia, 'Times New Roman', Times, serif"> 
            <a href="">Register</a> 
            <ul>
              <li  style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="student_register.php">Student</a></li>
              <li style="font-family:Georgia, 'Times New Roman', Times, serif"><a href="candidate_register.php">Candidate</a></li>
            </ul>
          </li>
							
          <li style="font-family:Georgia, 'Times New Roman', Times, serif"> <a href="">Election</a> 
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
<br>



<script type="text/javascript">
	  
         function validateEmail(email)
{

	result = false;

	var expEmail = /^[a-zA-Z0-9._-]+[@a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	if(expEmail.test(email) == true)
	{
		result = true;
	}

	return result;

} 

 function validatefname(fname)
 {
   result=false
   var letters=/^[A-Za-z]+$/;
   if (letters.test(fname)==true)
   {
     result=true;
	}
	return result;
 }
 function validatelname(lname)
 {
   result=false
   var letters=/^[A-Za-z]+$/;
   if (letters.test(fname)==true)
   {
     result=true;
	}
	return result;
 }
 


function doRegister()
{
	if(document.getElementById('fname').value == "")
	{
		alert("Please Enter First Name");
	}
	else if(validatefname(document.getElementById('fname').value)==false)
	{
	    alert("Name should be character");
	}
	
	else if(document.getElementById('lname').value == "")
	{
		alert("Please Enter Last Name");
	}
	else if(validatefname(document.getElementById('lname').value)==false)
	{
	    alert("Name should be character");
	}
	
	else if(document.getElementById('email').value == "")
	{
		alert("Please Enter Email ID");
	}
	else if(validateEmail(document.getElementById('email').value) == false)
	{
		alert("Invalid Email ID");
	}
	else if(document.getElementById('dob').value == "")
	{
		alert("Please Enter DOB");
	}
		else if(document.getElementById('address').value == "")
	{
		alert("Please Enter Address");
	}
	else if(document.getElementById('dept').value == "")
	{
		alert("Please Enter Department");
	}
	else if(document.getElementById('discription').value=="")
	{
	    alert("Please Enter Discription");
	}
	
	
	else if(document.getElementById('pno').value == "")
	{
		alert("Please Enter Mobile Number");
	}
	else if(isNaN(document.getElementById('pno').value))
	{
		alert("Invalid Mobile Number");
	}
	else if(document.getElementById('pno').value == "10")
	{
		alert("Please Enter Mobile Number");
	}
	else if(document.getElementById('mark').value== "")
	{ 
	    alert("please Enter your Percentage of Marks");
	}
	else if(document.getElementById('attendance').value== "")
	{
	    alert("Please Enter Your Percentage of Attendance");
	}
	else if(document.getElementById('image').value== "")
	{
	    alert("Please select Your Photo");
	}
	else if(document.getElementById('pword').value == "")
	{
		alert("Please Enter Password");
	}
	else if(document.getElementById('pword').value != document.getElementById('confirm_password').value)
	{
		alert("Passwords Should Match");
	}
	
	
	else
	{
	
		document.getElementById('form1').action = '';
		
		document.getElementById('form1').submit();
	}
}  

</script>

	<form method="post" name="form1" id="form1" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" style="padding-left:200px" >
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">First Name</label>

										
  <div class="col-sm-9"> 
    <input type="text" id="fname"  name="fname" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
                                   



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1" style="font-family:Georgia, 'Times New Roman', Times, serif"> Last Name </label>

										
  <div class="col-sm-9"> 
    <input type="text" id="lname"   name="lname"class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
                              
							  
							   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Emailid</label>

										
  <div class="col-sm-9"> 
    <input type="text" id="email"  name="email" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Date-Of-Birth</label>

										
  <div class="col-sm-9"> 
    <input type="date" id="dob"  name="dob" class="col-xs-10 col-sm-5" max="2019-12-31" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
                                    
                                    
                                   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Address</label>

										
  <div class="col-sm-9"> 
    <textarea name="address" id="address"   class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" ></textarea>
  </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Gender</label>

										<div class="form-group"> 
											&nbsp;&nbsp;&nbsp;<input type="radio" id="gender" name="gender" value="Female" class="" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" >Female &nbsp;&nbsp;
											<input type="radio" id="gender" name="gender" value="male" class="" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" >Male
										</div>
									</div>
                                    
                                    
                                   <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Department</label>

										
  <div class="col-sm-9"> 
    <select id="dept"  name="dept" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;">
      <option>Ist BCA</option>
      <option>IInd BCA</option>
      <option>IIIrd BCA</option>
      <option>Ist BBA</option>
      <option>IInd BBA</option>
      <option>IIIrd BBA</option>
      <option>Ist BCOM</option>
      <option>IInd BCOM</option>
      <option>IIIrd BCOM</option>
      <option>Ist BSC MATHS</option>
      <option>IInd BSC MATHS</option>
      <option>IIIrd BSC MATHS</option>
      <option>Ist BA ENGLISH</option>
      <option>IInd BA ENGLISH</option>
      <option>IIIrd BA ENGLISH</option>
      <option>Ist BA HINDI</option>
      <option>IInd BA HINDI</option>
      <option>IIIrd BA HINDI</option>
    </select>
  </div>
									</div>
									
									 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Discription</label>

										
  <div class="col-sm-9"> 
    <textarea name="discription" id="discription"   class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" ></textarea>
  </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Phone Number</label>

										
  <div class="col-sm-9"> 
    <input type="text" id="pno"  name="pno" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
									
									 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Marks(%)</label>

										
  <div class="col-sm-9"> 
    <input type="text" id="mark"  name="mark" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Attendance(%)</label>

										
  <div class="col-sm-9"> 
    <input type="text" id="attendance"  name="attendance" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Photo</label>
										
  <div class="col-sm-9"> 
    <input type="file" id="image" name="image" class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
								</div>
                                    
                                    
                                         
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1" style="font-family:Georgia, 'Times New Roman', Times, serif"> Password </label>

										
  <div class="col-sm-9"> 
    <input type="Password" id="pword"   name="pword"class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>

									
									 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1" style="font-family:Georgia, 'Times New Roman', Times, serif">Confirm Password </label>

										
  <div class="col-sm-9"> 
    <input type="Password" id="confirm_password"   name="confirm_password"class="col-xs-10 col-sm-5" style="border: 1px solid #D5D5D5;padding: 5px 4px 6px;" />
  </div>
									</div>

                                    
<div class="col-sm-9"> 
  <center>
    <br />
    <input type="button" value="Submit"  class="btn" onclick='doRegister();'>
    <input type="reset" value="Reset" name="Reset" class="btn">
    <br />
  </center>
</div>
                                    </form>
									