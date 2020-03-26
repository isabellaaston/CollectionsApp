
<?php
    require_once ('getDbFunction.php');
    require_once ('checkImageUrlFunction.php');
    require_once ('checkEntriesFunction.php');
    require_once ('addBagFunction.php');
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
                <label>Brand: </label>
                <input type="text" name="brand" /><br>
            </div>
            <div>
                <label>Model: </label>
                <input type="text" name ="model" /><br>
            </div>
            <div>
                <label>Price (£): </label>
                <input type="text" name ="price" /><br>
            </div>
            <div>
                <label>Materials: </label>
                <input type="textarea" name ="materials" /><br>
            </div>
            <div>
                <label>Image Address: </label>
                <input type="url" name ="image" /><br>
            </div>
            <input type ="submit" name="submit" value="Add Bag"/>
        </form>
        <?php
            $db =getDb();
            if (isset($_POST['submit'])){
                if (checkImageUrl()) {
                        if (checkEntries()) {
                            addBag ();
                        } else {
                            echo "Please fill in all required catergories";
                        }
                } else {
                    echo 'Not a valid image URL.';
                }
            }
        ?>
    </main>
    </body>
</html>