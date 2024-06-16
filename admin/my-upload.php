<?php
   /* if (isset($_POST["submit"])) {
        $dir = "../img/";
        $file = $dir . $_FILES["sekil"]["name"];
        $ok = true;
        $ext = strtolower(pathinfo($file,PATHINFO_EXTENSION)); // .jpg

        $check = getimagesize($_FILES["sekil"]["tmp_name"]);
        if( $check !== false && 
            file_exists($file) && 
            $_FILES["sekil"]["size"] > 500000 && 
            in_array($ext, ["jpg","png","jpeg","gif"]) ) {
            move_uploaded_file($_FILES["sekil"]["tmp_name"], $file);
        }
    }
    */
    if (isset($_POST["submit"])) {
        $dir = "../img/";
        $file = $dir . $_FILES["sekil"]["name"];
        $ok = true;
        $ext = strtolower(pathinfo($file,PATHINFO_EXTENSION)); // .jpg

        $check = getimagesize($_FILES["sekil"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $ok = true;
        } else {
            echo "File is not an image.";
            $ok = false;
        }

        if (file_exists($file)) {
            echo "Sorry, file already exists.";
            $ok = false;
        }

        if ($_FILES["sekil"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $ok = false;
        }

        if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $ok = false;
        }

        if ($ok == false) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["sekil"]["tmp_name"], $file)) {
                echo "The file ".$_FILES["sekil"]["name"]." has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        print_r($_POST);
        print_r($_FILES);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="metn" />
            <input type="file" name="sekil" accept="image/*" />
            <input type="submit" name="submit" />
        </form>
    </body>
</html>

<!-- 

Array
(
    [metn] => Test 6
)
Array
(
    [sekil] => Array
        (
            [name] => ankara.jpg
            [full_path] => ankara.jpg
            [type] => image/jpeg
            [tmp_name] => C:\xampp\tmp\phpC2C1.tmp
            [error] => 0
            [size] => 172950
        )

)

-->
