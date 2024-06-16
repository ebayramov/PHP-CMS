<?php
    $sql = "SELECT * FROM `content` WHERE `menu`=$page";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo '<h2>'.$row["title"].'</h2>';
        echo $row["image"] ? '<img src="img/'.$row["image"].'" alt="'.$row["title"].'" />' : '';
        echo '<div>'.$row["text"].'</div>';
    } else {
        echo '<h2>Error 404</h2>';
        echo '<img src="img/error.jpg" alt="error" />';
        echo '<div>Page not found...</div>';
    }

?>