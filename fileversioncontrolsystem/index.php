<h1>FILE SHARING AND VERSION CONTROL SYSTEM</h1>
</br>
</br>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
<?php
echo "<a href='filelist.php'>click here to redirect to file list</a>";
?>
