<?php
    $varr = ["sql" => '', "openModal" => '', "action" => "", "lang" => 2, "page" => 0, "ctitle" => "", "ctext" => "0", "cimg" => "0", "lid" => "", "lshort" => "", "lfull" => "",  "lstatus" => "", "laction" => 'ladd', "lbutton" => 'Add', "mid" => "", "morder" => "","mname" => "", "mstatus" => "","maction" => 'madd', "mbutton" => 'Add'];

    foreach ($varr as $var => $def) {
        ${$var} = $_REQUEST[$var] ?? $def;
    }

    echo $sql.'<br />';
    echo $lang.'<br />';
    echo $action.'<br />';
    echo $openModal.'<br />';
    echo $page.'<br />';
?>