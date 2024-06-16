<?php
$path = "../img/";
if (isset($_POST["submit"])) {
    $ext = strtolower(pathinfo($_FILES["cimg"]["name"], PATHINFO_EXTENSION));
    $file = uniqid($path) . ".$ext";
    $check = getimagesize($_FILES["cimg"]["tmp_name"]);
    if (
        $check !== false &&
        $_FILES["cimg"]["size"] < 500000 &&
        in_array($ext, ["jpg", "png", "jpeg", "gif"])
    ) {
        move_uploaded_file($_FILES["cimg"]["tmp_name"], $file);
        $sql = "SELECT `image` FROM `content` WHERE `menu` = '$page'";
        $result = $conn->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $image = $row['image'];
            if ($image === null || $image === '') {
                $photo = $_FILES["cimg"]["name"];
                $stmt = "UPDATE `content` SET `image` ='$photo'  WHERE `menu` = '$page'";
                $conn->query($stmt);
            } else {
                $photo = $_FILES["cimg"]["name"];
                $stmt = "UPDATE `content` SET `image` ='$photo'  WHERE `menu` = '$page'";
                $conn->query($stmt);
            }
        }
    }
    $img = isset($_POST["submit"]) ? '<img src="' . $file . '" style="width: 100px" />' : '';
}
