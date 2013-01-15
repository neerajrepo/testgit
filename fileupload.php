<?php
if($_FILES){
    echo "<pre>";
    print_r($_FILES);
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
    <title>File Upload</title>                
</head>
<body>
    <form name="frm" method="post" enctype='multipart/form-data'>
        <input type="file" name="fileupload">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
