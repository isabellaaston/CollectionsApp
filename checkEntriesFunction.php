<?php
     function checkEntries () : bool {
        return !($_POST['brand'] == '' && $_POST['model'] == '' && $_POST['price']=='' && $_POST['materials'] ==''); 
     }