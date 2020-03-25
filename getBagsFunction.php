<?php
/**
    * fetches all bags
    * 
    * @return
*/

function getBags(PDO $database) : array {
    $query=$database->prepare("SELECT `brand`,`image`,`model`,`price`,`materials` FROM `bags`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}