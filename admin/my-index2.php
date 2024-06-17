<?php
require_once "../db.php";
session_start();
if (isset($_SESSION["user"])) $user = $_SESSION["user"];
else {
    header("Location: login.php");
    die();
}
$action = $_REQUEST["action"] ?? "";
$lang = $_REQUEST["lang"] ?? "2";
$page = $_REQUEST["page"] ?? "0";
$ctitle = $_REQUEST["ctitle"] ?? "";
$ctext = $_REQUEST["ctext"] ?? "0";
$cimg = $_REQUEST["cimg"] ?? "0";
$lid = $_GET["lid"] ?? "";
$lshort = $_GET["lshort"] ?? "";
$lfull = $_GET["lfull"] ?? "";
$lstatus = $_GET["lstatus"] ?? "";
$laction = 'ladd';
$lbutton = 'Add';
$mid = $_GET["mid"] ?? "";
$morder = $_GET["morder"] ?? "";
$mname = $_GET["mname"] ?? "";
$mstatus = $_GET["mstatus"] ?? "";
$maction = 'madd';
$mbutton = 'Add';
$sql = '';
$openModal = '';

if ($action == "ldel") {
    $sql = "DELETE FROM `language` WHERE `id`=$lid";
} elseif ($action == "ladd" && $lshort != '' && $lfull != '') {
    $sql = "INSERT INTO `language` (`short`, `full`, `status`) VALUES ('$lshort', '$lfull', 0)";
    header("Location: index.php");
} elseif ($action == "lcheck") {
    $sql = "UPDATE `language` SET `status`=" . (1 - $lstatus) . " WHERE `id`=$lid";
} elseif ($action == "ledit") {
    $laction = 'lupdate';
    $lbutton = 'Edit';
} elseif ($action == "lupdate") {
    $sql = "UPDATE `language` SET `short`='$lshort', `full`='$lfull'  WHERE `id`=$lid";
    header("Location: index.php");
} elseif ($action == "mdel") {
    $sql = "DELETE FROM `menu` WHERE `id`=$mid";
} elseif ($action == "madd" && $morder != '' && $mname != '') {
    $sql = "INSERT INTO `menu` (`lang`, `order`, `name`, `status`) VALUES ($lang, '$morder', '$mname', 0)";
    header("Location: index.php");
} elseif ($action == "mcheck") {
    $sql = "UPDATE `menu` SET `status`=" . (1 - $mstatus) . " WHERE `id`=$mid";
} elseif ($action == "medit") {
    $maction = 'mupdate';
    $mbutton = 'Edit';
    $openModal = 'showmodal()';
} elseif ($action == "mupdate") {
    $sql = "UPDATE `menu` SET `order`='$morder', `name`='$mname'  WHERE `id`=$mid";
    header("Location: index.php");
} elseif ($action == "cadd") {
    $sql = "INSERT INTO `content` (`menu`, `title`, `text`, `image`) VALUES ('$page', '$ctitle', '$ctext', '')";
} elseif ($action == "logout") {
    session_unset();
    session_destroy();
    header("Location: login.php");
    die();
}

if ($sql) mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <div>
        <header>
            <h1>CMS - Content Management System</h1>
        </header>
        <main>
            <aside>
                <table>
                    <?php
                    $sql = "SELECT * FROM `language` ORDER BY `short`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                                    <tr>
                                        <td>' . $row["short"] . '</td>
                                        <td><a href="?lang=' . $row["id"] . '">' . $row["full"] . '</a></td>
                                        <td>
                                            <a href="?action=lcheck&lid=' . $row["id"] . '&lstatus=' . $row["status"] . '"><i class="far fa' . ($row["status"] ? '-check' : '') . '-square"></i></a>
                                            <a href="?action=ledit&lid=' . $row["id"] . '&lshort=' . $row["short"] . '&lfull=' . $row["full"] . '"><i class="fas fa-edit"></i></a>
                                            <a href="?action=ldel&lid=' . $row["id"] . '"><i class="far fa-window-close"></i></a>
                                        </td>
                                    </tr>
                                ';
                    }
                    ?>
                    <tr>
                        <form>
                            <input type="hidden" name="action" value="<?= $laction ?>" />
                            <input type="hidden" name="lid" value="<?= $lid ?>" />
                            <td><input type="text" name="lshort" size="2" value="<?= $lshort ?>" /></td>
                            <td><input type="text" name="lfull" value="<?= $lfull ?>" /></td>
                            <td><input type="submit" value="<?= $lbutton ?>"></td>
                        </form>
                    </tr>
                </table>
                <br />
                <table>
                    <?php
                    $sql = "SELECT * FROM `menu` WHERE `lang`=$lang ORDER BY `order`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                                    <tr>
                                        <td>' . $row["order"] . '</td>
                                        <td><a href="?lang=' . $lang . '&page=' . $row["id"] . '">' . $row["name"] . '</a></td>
                                        <td>
                                            <a href="?action=mcheck&mid=' . $row["id"] . '&mstatus=' . $row["status"] . '"><i class="far fa' . ($row["status"] ? '-check' : '') . '-square"></i></a>
                                            <a href="?action=medit&mid=' . $row["id"] . '&morder=' . $row["order"] . '&mname=' . $row["name"] . '"><i class="fas fa-edit"></i></a>
                                            <a href="?action=mdel&mid=' . $row["id"] . '"><i class="far fa-window-close"></i></a>
                                        </td>
                                    </tr>
                                ';
                    }
                    ?>
                    <tr>
                        <td colspan="3"><button onclick="showmodal()">+</button></td>
                    </tr>
                </table>
            </aside>
            <section>
                <?php
                if ($page == 0) echo '<h3>Bir sehife secin</h3>';
                else {
                    $caction = "cupdate";
                    $sql = "SELECT * FROM `content` WHERE `menu`=$page";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $title = $row["title"];
                        $text = $row["text"];
                        $img = $row["image"];
                    } else {
                        $caction = "cadd";
                        $title = "";
                        $text = "";
                        $img = "";
                    }
                    echo '
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="action" value="' . $caction . '" />
                                    <input type="hidden" name="lang" value="' . $lang . '" />
                                    <input type="hidden" name="page" value="' . $page . '" />
                                    <p><input type="text" name="ctitle" value="' . $title . '" class="long" /></p>
                                    <p><textarea name="ctext" >' . $text . '</textarea></p>
                                    <p><input type="file" name="cimg" id="cimg" accept="image/*" /></p>
                                    <p><input type="submit" name="submit" value="OK" /></p>
                                </form>
                            ';
                }

                if (isset($_POST["submit"])) {

                    $dir = "../img/";
                    $file = $dir . $_FILES["cimg"]["name"];
                    $ok = true;
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); // .jpg

                    $check = getimagesize($_FILES["cimg"]["tmp_name"]);
                    if ($check !== false) {
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

                    if ($_FILES["cimg"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $ok = false;
                    }

                    if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $ok = false;
                    }

                    if ($ok == false) {
                        echo "Sorry, your file was not uploaded.";
                    } else {
                        if (move_uploaded_file($_FILES["cimg"]["tmp_name"], $file)) {
                            echo "The file " . $_FILES["cimg"]["name"] . " has been uploaded.";
                            $image = $conn->real_escape_string($_FILES["cimg"]["name"]);
                            $stmt = $conn->prepare("UPDATE content SET image = ? WHERE menu = ?");
                            $stmt->bind_param("si", $image, $page);
                            if ($stmt->execute()) {
                                echo "Record updated successfully.";
                            } else {
                                echo "Error updating record: " . $stmt->error;
                            }

                            $stmt->close();
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }
                ?>
            </section>
        </main>
        <footer>
            Copyright &copy; <?= date('Y') ?>
        </footer>
    </div>
    <div id="wrapper">
        <div id="modal">
            <form>
                <input type="hidden" name="action" value="<?= $maction ?>" />
                <input type="hidden" name="mid" value="<?= $mid ?>" />
                <p><input type="text" name="morder" size="2" value="<?= $morder ?>" placeholder="Menu Order" /></p>
                <p><input type="text" name="mname" value="<?= $mname ?>" placeholder="Menu Name" /></p>
                <p><input type="submit" value="<?= $mbutton ?>"></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/8x0dtf3c4cb38ycktr4vcsldi8xcac9rx0o2mrpjx78keld4/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        const wrapper = document.getElementById("wrapper")

        showmodal(false);
        <?= $openModal ?>

        function showmodal(showm = true) {
            wrapper.style.display = showm ? "flex" : "none";
        }

        tinymce.init({
            selector: 'textarea'
        })
    </script>
</body>

</html>