<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Academics</title>
<meta name="keywords" content="free css template, liquid, portfolio, CSS, HTML" />
<meta name="description" content="Liquid Portfolio - free CSS template provided by templatemo.com website." />
<link href="academic.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />

<!--////// END  \\\\\\\-->

        <!-- Site JavaScript -->
        <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
        <script type="text/javascript">
            $(function() {
            $('#one').ContentSlider({
            width : '960px',
              height : '200px',
          speed : 400,
            easing : 'easeOutSine'
            });
            });
        </script>
        <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
        <script src="js/chili/recipes.js" type="text/javascript"></script>
        
<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->

<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<style>
 #head{margin-right:80px;
	margin-left: -337px;
	padding-top: 20px;
}
        }
</style>
</head>
<body> 
<div id="templatemo_header_wrapper ">
    <div id="templatemo_header">
        <div id="site_title">
              <p align="justify"><a href="#" rel="nofollow"><img align="center" width="974" height="90" src="header.png" alt=""  id="head"/></a> </p>
        </div>


        <div class="cleaner"></div>
    </div> <!-- end of header -->
</div>

<div id="templatemo_menu">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="signin.php" class="current"> Academics</a></li>
        <li><a href="research.html">Research</a></li>
        <li><a href="staff.html">Our People</a></li>
        <li><a href="blog.html" >Forum</a></li>
        <li class="last"><a href="about.html">About Us</a></li>
    </ul>
</div>
<div id="templatemo_wrapper">
  
 

        <div class="cleaner"></div>
   
  

	
    
    <!--<div id="templatemo_content_top"></div> -->
   <div id="templatemo_content">
    	<div id="templatemo_main_content">
        
        	<div class="content_box">
            






<?php
//signup.php
include 'connect.php';


echo '<h3>Sign up</h3><br />';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    /*the form hasn't been posted yet, display it
	  note that the action="" will cause the form to post to the same page it is on */
    echo '<form style="display:compact" method="post" action="">
 	 	Username: <input type="text" name="user_name" /><br />
 		Password: <input type="password" name="user_pass"><br />
		Confirm password: <input type="password" name="user_pass_check"><br />
		Level: <input type="text" name="department" /><br />
		E-mail: <input type="email" name="user_email"><br />
		
 		<input type="submit" value="Submit" />
 	 </form>';
}
else
{
    /* so, the form has been posted, we'll process the data in three steps:
		1.	Check the data
		2.	Let the user refill the wrong fields (if necessary)
		3.	Save the data 
	*/
	$errors = array(); /* declare the array for later use */
	
	if(isset($_POST['user_name']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['user_name']))
		{
			$errors[] = 'The username can only contain letters and digits.';
		}
		if(strlen($_POST['user_name']) > 30)
		{
			$errors[] = 'The username cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The username field must not be empty.';
	}
	
	
	if(isset($_POST['user_pass']))
	{
		if($_POST['user_pass'] != $_POST['user_pass_check'])
		{
			$errors[] = 'The two passwords did not match.';
		}
	}
	else
	{
		$errors[] = 'The password field cannot be empty.';
	}
	
	if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	{

		echo 'Uh-oh.. a couple of fields are not filled in correctly..<br /><br />';
		echo '<ul>';

		foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
		{
			echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            echo ' Go back to &nbsp;<a href="signup.php"> Sign Up</a>';
		}
		echo '</ul>';
	}
	else
	{
		//the form has been posted without, so save it
		//notice the use of mysql_real_escape_string, keep everything safe!
		//also notice the sha1 function which hashes the password
		$sql = "INSERT INTO
					users(user_name, user_pass, user_email ,user_date, user_level)
				VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
					   '" . sha1($_POST['user_pass']) . "',
					   '" . mysql_real_escape_string($_POST['user_email']) . "',
						NOW(),
						0)";
						
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Something went wrong while registering. Please <a href="signup.php">try again</a>.';
			//echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{
			echo 'Succesfully registered. You now have the admin access.<a href="signin.php">Login</a> with your own username and start uploading';
		}
	}
}

?>




             
			</div>
            
         

        </div>
        
        <div id="templatemo_sidebar">
        
        	<div id="news_box">
                
          
                <div class="cleaner"></div>     
            </div>
            
            <div class="sidebar_box">
            	<h2><a href="http://cn.forwallpaper.com/" title="forwallpaper"  class="sidebar_box_h2" target="_blank">Help</a></h2>
                <blockquote>
                    <p align="justify">The academic section contains courses offered by students of the department.The details of the courses include the course code,course title and course unit.The course materials page include course materials uploaded by the site administrator which is available for download.</p>
                    
                    
                </blockquote>
            </div>
            
        </div>
        
        <div class="cleaner"></div>
    </div>
 <!--   <div id="templatemo_content_bottom"></div> -->
    
    <div id="templatemo_footer">

        Copyright © 2048 <a href="#">webometric unit</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>


