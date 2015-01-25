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
   
  

	
    
  <!--  <div id="templatemo_content_top"></div>-->
    <div id="templatemo_content">
    	<div id="templatemo_main_content">
        	<div class="content_box">
            <h3>Course Materials</h3>
<?php
//database connection
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
//select database
$db = mysql_select_db('tests', $con);
$query = "SELECT id, name FROM upload";
$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($id, $name) = mysql_fetch_array($result))
{
?>
<a href="download.php?id=<?php echo urlencode($id);?>"
><?php echo urlencode($name);?></a> <br>
<?php 
}
}
mysql_close();
?>
</body>
</html>
<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
$db = mysql_select_db('tests', $con);
$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";
$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
flush();
echo $content;
mysql_close();
exit;
}
?>

             
			</div>
            
         

        </div>
        
        <div id="templatemo_sidebar">
        
        	<div id="news_box">
                
                
                
                             
<?php
//signin.php
include 'connect.php';




//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo 'You are already signed in, you can <a href="signout.php">sign out</a> if you want.';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		/*the form hasn't been posted yet, display it
		  note that the action="" will cause the form to post to the same page it is on */
		echo '<form method="post" action="">
		  <p id="studentlogin"><b>ADMIN LOGIN</b></p>
			Username: <input type="text" name="user_name" /><br />
			Password: <input type="password" name="user_pass"><br />
			<input type="submit" value="Sign in" />
		 </form>';
	}
	else
	{
		/* so, the form has been posted, we'll process the data in three steps:
			1.	Check the data
			2.	Let the user refill the wrong fields (if necessary)
			3.	Varify if the data is correct and return the correct response
		*/
		$errors = array(); /* declare the array for later use */
		
		if(!isset($_POST['user_name']))
		{
			$errors[] = 'The username field must not be empty.';
		}
		
		if(!isset($_POST['user_pass']))
		{
			$errors[] = 'The password field must not be empty.';
		}
		
		if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
		{
			echo 'Uh-oh.. a couple of fields are not filled in correctly..<br /><br />';
			echo '<ul>';
			foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
			{
				echo '<li>' . $value . '</li>'; /* this generates a nice error list */
			}
			echo '</ul>';
		}
		else
		{
			//the form has been posted without errors, so save it
			//notice the use of mysql_real_escape_string, keep everything safe!
			//also notice the sha1 function which hashes the password
			$sql = "SELECT 
						user_id,
						user_name,
						user_level
					FROM
						users
					WHERE
						user_name = '" . mysql_real_escape_string($_POST['user_name']) . "'
					AND
						user_pass = '" . sha1($_POST['user_pass']) . "'";
						
			$result = mysql_query($sql);
			if(!$result)
			{
				//something went wrong, display the error
				echo 'Something went wrong while signing in. Please try again later.';
				//echo mysql_error(); //debugging purposes, uncomment when needed
			}
			else
			{
				//the query was successfully executed, there are 2 possibilities
				//1. the query returned data, the user can be signed in
				//2. the query returned an empty result set, the credentials were wrong
				if(mysql_num_rows($result) == 0)
				{
					echo 'You have supplied a wrong user/password combination. Please try again.';
				}
				else
				{
					//set the $_SESSION['signed_in'] variable to TRUE
					$_SESSION['signed_in'] = true;
					
					//we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
					while($row = mysql_fetch_assoc($result))
					{
						$_SESSION['user_id'] 	= $row['user_id'];
						$_SESSION['user_name'] 	= $row['user_name'];
						$_SESSION['user_level'] = $row['user_level'];
					}
					
					echo 'Welcome, ' . $_SESSION['user_name'] . '. <br /><a href="fileupload.php">Proceed to upload page</a>.<br /><a href="signin.php">Go back to login section</a>.';
				}
			}
		}
	}
}


?>



                <div class="cleaner"></div>     
            </div>
            
            <div class="sidebar_box">
            	<h2><a href="http://cn.forwallpaper.com/" title="forwallpaper"  class="sidebar_box_h2" target="_blank">Help</a></h2>
                <blockquote>
                    <p align="justify">The academic section  contains courses offered by students of the department.The details of the courses include the course code,course title and course unit.The course materials page include course materials uploaded by the site administrator which is available for download.</p>
                    
                  
                </blockquote>
            </div>
            
        </div>
        
        <div class="cleaner"></div>
    </div>
  <!--  <div id="templatemo_content_bottom"></div>-->
    
    <div id="templatemo_footer">

        Copyright © 2048 <a href="#">webometric unit</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>


