<?php
require_once "../db.php";
session_start();
if (isset($_SESSION["user"])) $user = $_SESSION["user"];
else {
    header("Location: login.php");
    die();
}

$action = (isset($_GET["action"])) ? $_GET["action"] : "";
$lang = (isset($_GET["lang"])) ? $_GET["lang"] : "2";
$lid = (isset($_GET["lid"])) ? $_GET["lid"] : "";
$lshort = (isset($_GET["lshort"])) ? $_GET["lshort"] : "";
$lfull = (isset($_GET["lfull"])) ? $_GET["lfull"] : "";
$lstatus = (isset($_GET["lstatus"])) ? $_GET["lstatus"] : "";

if ($action == "ldel") {
    $sql = "DELETE FROM `language` WHERE `id`=$lid";
    mysqli_query($conn, $sql);
} elseif ($action == "ladd" && $_GET["lshort"] != "" && $_GET["lfull"] != "") {
    $sql = "INSERT INTO `language` (`short`, `full`, `status`) VALUES ('$lshort', '$lfull', 0)";
    mysqli_query($conn, $sql);
    header("Location: /Elmi/site-db/admin/index.php");
    exit;
} elseif ($action == "lcheck") {
    $sql = "UPDATE `language` SET `status`=" . (1 - $lstatus) . " WHERE `id`=$lid";
    mysqli_query($conn, $sql);
} elseif ($action == "ledit2") {
    $sql = "UPDATE `language` SET `full`='$lfull', `short`='$lshort' WHERE `id`='$lid'";
    mysqli_query($conn, $sql);
} elseif ($action == "logout") {
    session_unset();
    session_destroy();
    header("Location: login.php");
    die();
}
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
                    $sql = 'SELECT * FROM `language` ORDER BY `short`';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                                    <tr>
                                        <td>' . $row["short"] . '</td>
                                        <td>' . $row["full"] . '</td>
                                        <td>
                                            <a href="?action=lcheck&lid=' . $row["id"] . '&lstatus=' . $row["status"] . '"><i class="far fa' . ($row["status"] ? '-check' : '') . '-square"></i></a>
                                            <a href="?action=ledit&lid=' . $row["id"] . '&lshort=' . $row["short"] . '&lfull=' . $row["full"] . ' "><i class="fas fa-edit"></i></a>
                                            <a href="?action=ldel&lid=' . $row["id"] . '"><i class="far fa-window-close"></i></a>
                                        </td>
                                    </tr>
                                ';
                    }
                    ?>
                    <tr>
                        <form>
                            <input type="hidden" name="action" value="<?= $action == "ledit" ? "ledit2" : "ladd" ?>" />
                            <input type="hidden" <?= $action == "ledit" ? "value=$lid name='lid'" : "" ?> />
                            <td>
                                <input type="text" name="lshort" size="2" <?= $action == "ledit" ? "value=$lshort" : ""?> />
                            </td>
                            <td>
                                <input type="text" name="lfull" <?= $action == "ledit" ? "value=$lfull" : ""?> />
                            </td>
                            <td>
                                <input type="submit" value= "<?= $action == "ledit" ? "Edit" : "Add" ?>" >
                            </td>
                        </form>
                    </tr>
                </table>
            </aside>
            <section>
                <form>
                </form>
            </section>
        </main>
        <footer>
            Copyright &copy; <?= date('Y') ?>
        </footer>
    </div>
    <script src="https://cdn.tiny.cloud/1/8x0dtf3c4cb38ycktr4vcsldi8xcac9rx0o2mrpjx78keld4/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        })
    </script>
</body>

</html>