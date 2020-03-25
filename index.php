<?php
    require_once('getDbFunction.php');
    require_once('getBagsFunction.php');
    require_once('listBagsFunction.php');
?>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
        <title>My Collection</title>
    </head>
    <body>
        <h1>My Handbag Collection</h1>
        <nav>
            <div class="navbar">
                <a class="underline">Collection</a>
                <a class="underline" href="addBag.php">Add Item</a>
                <!-- <a class="underline">Edit Item</a> -->
            </div>
        </nav>
    <main>
        <?php
        $db=getDb();
        $bags=getBags($db);
        $collection=listBags($bags);
        ?>
    </main>
    </body>
</html>