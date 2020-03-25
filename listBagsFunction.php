<?php
/**
    * lists bags
    * 
*/
function listBags(array $items) {
    echo '<div class="bags">';
    foreach ($items as $item) {
        echo '<div class="item">';
        echo '<h2>'.$item['brand'].'</h2>';
        echo '<br>';
        echo '<div class="image">';
        echo '<img src="'.$item['image'].'">';
        echo '</div>';
        echo '<br>';
        echo '<ul>';
            echo '<li>'.$item['model'].'</li><br>';
            echo '<li>£'.$item['price'].'</li><br>';
            echo '<li>'.$item['materials'].'</li>';
        echo '</ul>';
        echo '</div>';
    };
     echo '</div>';
}