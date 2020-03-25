
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
        <title>My Collection</title>
    </head>
    <body>
        <h1>My Handbag Collection</h1>
        <nav>
            <div class="navbar">
                <a class="underline">Collection</a>
                <a class="underline">Add Item</a>
                <!-- <a class="underline">Edit Item</a> -->
            </div>
        </nav>
    <main>
        <?php
        require_once('getDbFunction.php');
        $db=getDb();
        require_once('getBagsFunction.php');
        $bags=getBags($db);
        require_once('listBagsFunction.php');
        $collection=listBags($bags);
        ?>
    </main>
    </body>
</html>