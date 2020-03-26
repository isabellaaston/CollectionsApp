<?php
     function checkEntries (string $brand, string $model, int $price, string $materials) : bool {
        return !($brand == '' || $model == '' || $price=='' || $materials ==''); 
     }