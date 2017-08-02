<?php require('../../../wp-blog-header.php');?> 
<?php
update_option ('pic_size',$_REQUEST['width']);
echo "<script>alert('Width value was updated.'); javascript:history.back();</script>";
?>
<FORM><INPUT type=button value=" Back " onClick="history.back();"></FORM> 