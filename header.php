<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Title</h1>
            </header>
            <main>
                <aside>
                    <p class="lang">
                    <?php
                        $sql = "SELECT `id`, `short` FROM `language` WHERE `status`=1 ORDER BY `short`;";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($result)){
                            echo '<a href="?lang='.$row["id"].'">'.ucfirst($row["short"]).'</a> |';
                        }
                    ?>
                    </p>
                    <ul>
                    <?php
                        $sql = "SELECT * FROM `menu` WHERE `lang`=$lang AND `status`=1 ORDER BY `order`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<li><a href="?page='.$row["id"].'">'.$row["name"].'</a></li>';
                        }
                            
                        
                    ?>
                    </ul>
                </aside>
                <section>