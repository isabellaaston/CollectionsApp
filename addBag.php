
<?php
    require_once 'getDbFunction.php';
    require_once 'checkImageUrlFunction.php';
    require_once 'checkEntriesFunction.php';
    require_once 'addBagFunction.php';
?>
<html lang=en>
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
                <a class="hover" href="index.php">Collection</a>
                <a class="underline">Add Item</a>
                <!-- <a class="underline">Edit Item</a> -->
            </div>
        </nav>
    <main>
        <form method ="post">
            <div>
                <label for="brand">Brand: </label>
                <input id="brand" type="text" name="brand" required/><br>
            </div>
            <div>
                <label for="model">Model: </label>
                <input id="model" type="text" name ="model" required/><br>
            </div>
            <div>
                <label for="price">Price (£): </label>
                <input id="price" type="text" name ="price" required/><br>
            </div>
            <div>
                <label for="materials">Materials: </label>
                <input id="materials" type="textarea" name ="materials" required/><br>
            </div>
            <div>
                <label for="image">Image Address: </label>
                <input id="image" type="url" name ="image" required/><br>
            </div>
            <input type ="submit" name="submit" value="Add Bag"/>
        </form>
        <?php
            $db =getDb();
            if (isset($_POST['submit'])){
                if (checkImageUrl()) {
                        if (checkEntries($_POST['brand'])) {
                            addBag ();
                        } else {
                            echo "Please fill in all required categories.";
                        }
                } else {
                    echo 'Not a valid image URL.';
                }
            }
        ?>
    </main>
    </body>
</html>