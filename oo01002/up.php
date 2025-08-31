<!DOCTYPE html>
<html><head><title>Upload</title><body>
<?php 
if(isset($_POST['submit'])){
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i]; 
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'uploads/'.$filename);
    }
    echo "Done!<p>";
} 
?>
<form method='post' action='' enctype='multipart/form-data'>
    <input type="file" name="file[]" id="file" multiple>

    <input type='submit' name='submit' value='Upload'>
</form>
</body></html>