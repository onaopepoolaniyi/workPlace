<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liquid - free CSS template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">

      var flashvars = {};
      flashvars.cssSource = "piecemaker.css";
      flashvars.xmlSource = "photo_list.xml";
		
      var params = {};
      params.play = "true";
      params.menu = "false";
      params.scale = "showall";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      params.allowscriptaccess = "always";
      params.allownetworking = "all";
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '940', '420', '10', null, flashvars,    
      params, null);
    
</script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
      
        <div id="templatemo_menu">
       <nav>
            <ul>
                
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Company</a></li>
                  
                <li><a href="signin.php" class="current">COURSES</a>
             
			</li>
                <li><a href="blog.html">Blog</a></li>
                <li class="last"><a href="contact.html">Contact</a></li>
                   
            </ul>
            </nav>
            
           
            <div class="cleaner"></div>    	
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
</div>
    
<div id="templatemo_wrapper">

 
    <div id="templatemo_content_top"></div>
    <div id="templatemo_content">
    	<div id="templatemo_main_content">
        
        	<div class="content_box">
            
            
<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box">
<tr>
<td>please select a file</td></tr>
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
echo "<br>File $fileName uploaded<br>";
}else { echo "file upload failed"; }
} 
?>


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
                
                <h2>Latest Updates</h2>
                        
                <ul>
                	<li>
                        <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                        <p>You may validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a> for this page. Maecenas tellus erat, dictum vel semper, dapibus ac elit.</p>
                    </li>
                    
                    <li>
                        <h6><a href="#">Nunc porttitor feugiat elit</a></h6>
                        <p>Nunc porttitor feugiat elit, ac tristique turpis condimentum in. Sed eleifend odio eget massa venenatis elementum.</p>
                    </li>
                    
                    <li class="last">
                        <h6><a href="#">Pellentesque mauris ligula</a></h6>
                        <p>Integer tempus consectetur risus, id congue justo fringilla vel. Curabitur vestibulum vulputate consectetur. </p>
                    </li>
                    
                </ul>
                <div class="btn_more"><a href="#"><span>+</span> View All Posts</a></div>
                <div class="cleaner"></div>     
            </div>
            
            <div class="sidebar_box">
            	<h2><a href="http://cn.forwallpaper.com/" title="forwallpaper"  class="sidebar_box_h2" target="_blank">Help</a></h2>
                <blockquote>
                    <p align="justify">This page contains courses offered by students of the department.The details of the courses include the course code,course title and course unit.The course materials page include course materials uploaded by the site administrator which is available for download.</p>
                    
                </blockquote>
            </div>
            
        </div>
        
        <div class="cleaner"></div>
    </div>
    <div id="templatemo_content_bottom"></div>
    
    <div id="templatemo_footer">

        Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" rel="nofollow" target="_parent">Free CSS Templates</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>


