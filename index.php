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
</main>
</body>
<?php
$db = new PDO('mysql:host=db; dbname=MyCollection','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query=$db->prepare("SELECT* FROM `bags`;");
$query->execute();
$result = $query->fetchAll();

echo '<div class="bags">';
foreach ($result as $bag) {
    echo '<div class="item">';
    echo '<h2>';
    echo $bag['brand'];
    echo '</h2>';
    echo '<br>';
    echo '<img src="'.$bag['image'].'">';
    echo '<br>';
    echo '<ul>';
    echo '<li>';
    echo $bag['model'];
    echo '</li>';
    echo '<br>';
    echo '<li>';
    echo '£'.$bag['price'];
    echo '</li>';
    echo '<br>';
    echo '<li>';
    echo $bag['materials'];
    echo '</li>';
    echo '</ul>';
    echo '</div>';
};
echo '</div>';
?>