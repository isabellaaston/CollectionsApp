<?php
     /**
         * calls databse
         * 
         * @return 
         */
        function getDb() : PDO {
            $database = new PDO('mysql:host=db; dbname=MyCollection','root','password');
            $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $database;
        }