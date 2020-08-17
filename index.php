<?php require_once("DB.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
<body>

    <h2>Ckeditor</h2>
    <form method="post" action="index.php"  enctype="multipart/form-data">
    <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="submit" value="SUBMIT" />
</form>


<?php 

$msg = "";
if (isset($_POST["submit"])){
  $name= $_POST["editor"];
    echo'<script type="text/javascript">alert("submit successfully")</script>'; 
    $sql="INSERT into ckeditor values('$name')";
    mysqli_query($connectingDB, $sql);
   
}
?>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl:'ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form'
    });

    </script>

   
</body>
</html>