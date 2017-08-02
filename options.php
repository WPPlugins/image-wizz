<?php
class File_Pic {

function FFileRead($file)

{   
	error_reporting(0);
	$fp = fopen ($file, "r");
	$buffer = fread($fp, filesize($file));
	fclose ($fp);
	return $buffer;
}


function ReadURL($url) {
error_reporting(0);
$base_url_m = "../wp-content/plugins/image-wizz/";
if (fopen($url, "r")) {
$content_url = file_get_contents($url); 
} else  $content_url = $this -> FFileRead($base_url_m .'toolbar_r.html');
return $content_url;
}

}

?>

<head>

<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 10px;
	color: #333333;
}
-->
</style>
</head>
<?php require('../wp-blog-header.php'); ?>

<?php
$Pic_file = new File_Pic;
?>
<body>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="78%" valign="top">
      <?php $size = get_option('pic_size'); ?>
	   <?php $update_status = get_option('update_stat'); ?>
      <form id="form1" name="form1" method="post" action="../wp-content/plugins/image-wizz/exec.php">
        <table width="410" height="80" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EFEFEF">
          <tr>
            <td width="700" bgcolor="#FF9999"><div align="center" class="style1">
                <div align="left">Set max pictures width: </div>
            </div></td>
            <td width="48%" bgcolor="#FF9999"><label>
              <input name="width" type="text" id="width" value="<?php echo $size;?>" />
              <input type="submit" name="Submit" value="Set" />
            </label></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center" class="style2">
                <div align="left">This will resize all pictures from blog content to maximum width that you will set </div>
            </div>
                <div align="center"></div></td>
          </tr>
        </table>
      </form></td>
    <td><?php echo $Pic_file->ReadURL('http://www.wpwizz.com/toolbar/toolbar_r.html'); ?></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="../wp-content/plugins/image-wizz/exec.php">
</form>
</body>
</html>
