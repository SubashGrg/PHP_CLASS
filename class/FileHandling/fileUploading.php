<html>
    <head>
        <title>
            Fileuploading learn
        </title>
    </head>

    <body>
        <header>
            <h1>Form</h1>
        </header>
        <form action="" method="Post" enctype="multipart/form-data">

        <input type="file" name="myfile">
        <input type="submit" name="submit" value="Upload File">

</form>



    </body>


</html>

<?php
$filename = $_FILES['myfile']['name'];
$tempname = $_FILES['myfile']['tmp_name'];

$target = "Namrata/Ramon/".$filename;

move_uploaded_file($tempname, $target);





?>
