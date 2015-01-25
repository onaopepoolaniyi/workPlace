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
   
  

	
    
   <!-- <div id="templatemo_content_top"></div>  -->
    <div id="templatemo_content">
    	<div id="templatemo_main_content">        
        	<div class="content_box">
            
            <h3><b>ADMIN PAGE</b></h3>
            <p>The administrator has the access to upload files and grant administrative access to other users.</p>
            <br/>
            
            <h3>File Upload</h3>
                        
<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box">
<tr>
<td>Please select a file</td></tr>
<tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE"
value="16000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload"
type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['upload'])&&$_FILES['userfile']['size']>0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$fileType=(get_magic_quotes_gpc()==0 ? mysql_real_escape_string(
$_FILES['userfile']['type']) : mysql_real_escape_string(
stripslashes ($_FILES['userfile'])));
$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
$db = mysql_select_db('tests', $con);
if($db){
$query = "INSERT INTO upload (name, size, type, content ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
mysql_query($query) or die('Error, query failed'); 
mysql_close();
echo '<br>File '.$fileName.' uploaded &nbsp;&nbsp; <a href="download.php">Proceed to download page</a><br>';
}else { echo "file upload failed"; }
} 
?>

<br/>

         <h3><b>SIGN UP</b></h3>
         Click <a href="signup.php">here</a> to register another user.



           
             
              
			</div>
            
         

        </div>
        
        <div id="templatemo_sidebar">
        
        	<div id="news_box">




          
                <div class="cleaner"></div> 
                    
            </div>
            
            <div class="sidebar_box">
            	<h2><a title="Chase wall papers" href="http://www.forwallpaper.com/search/chase.html"  target="_blank" class="sidebar_box_h2">Help</a></h2>
                <blockquote>
                    <p align="justify">The academic section contains courses offered by students of the department.The details of the courses include the course code,course title and course unit.The course materials page include course materials uploaded by the site administrator which is available for download.</p>
                 
                </blockquote>
            </div>
            
        </div>
        
        <div class="cleaner"></div>
    </div>
   <!-- <div id="templatemo_content_bottom"></div>-->
    
    <div id="templatemo_footer">

        Copyright © 2014 <a href="#">webometric unit</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
