<?php
 function checkImageUrl () : bool {
    $image = trim(htmlspecialchars($_POST['image']));
    $image = filter_var($image, FILTER_VALIDATE_URL);

    return $image;
}