<?php
    require_once ('db.php');

    $lang = (isset($_GET["lang"])) ? $_GET["lang"] :
            ((isset($_COOKIE['dil'])) ? $_COOKIE['dil'] :  2);
    $page = (isset($_GET["page"]) && $_GET["page"] != "") ? (int)$_GET["page"] : "2";
    setcookie('dil', $lang, time() + 30 * 24 * 60 * 60, '/');

    
    include("header.php");
    include("main.php");
    include("footer.php");
?>