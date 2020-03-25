<html lang=en>
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
                <a class="underline" href="index.php">Collection</a>
                <a class="underline">Add Item</a>
                <!-- <a class="underline">Edit Item</a> -->
            </div>
        </nav>
    <main>
        <form method ="post">
            <div>
                <label>Brand: </label>
                <input type="text" name="brand" required/><br>
            </div>
            <div>
                <label>Model: </label>
                <input type="text" name ="model" required/><br>
            </div>
            <div>
                <label>Price (£): </label>
                <input type="text" name ="price" required/><br>
            </div>
            <div>
                <label>Materials (optional): </label>
                <input type="text" name ="materials"/><br>
            </div>
            <div>
                <label>Image Address: </label>
                <input type="url" name ="image address" required/><br>
            </div>
            <input type ="submit" value="Add Bag"/>
        </form>
    </main>
    </body>
</html>