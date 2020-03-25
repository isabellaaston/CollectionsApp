
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
                <a class="underline">Edit Item</a>
            </div>
        </nav>
    <main>
        <?php
        require_once('getDbFunction.php');
        $db=getDb();
        $query=$db->prepare("SELECT `brand`,`image`,`model`,`price`,`materials` FROM `bags`;");
        $query->execute();
        $result = $query->fetchAll();

        echo '<div class="bags">';
        foreach ($result as $bag) {
            echo '<div class="item">';
            echo '<h2>'.$bag['brand'].'</h2>';
            echo '<br>';
            echo '<div class="image">';
            echo '<img src="'.$bag['image'].'">';
            echo '</div>';
            echo '<br>';
            echo '<ul>';
                echo '<li>'.$bag['model'].'</li><br>';
                echo '<li>£'.$bag['price'].'</li><br>';
                echo '<li>'.$bag['materials'].'</li>';
            echo '</ul>';
            echo '</div>';
        };
        echo '</div>';
        ?>
    </main>
    </body>
</html>