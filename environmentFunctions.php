<?php
    
    function getDatabaseConnectionDetails() {
        $host = "127.0.0.1";
        $user = "root";
        $password = "";
        $dbname = "reviews_db";
        return array($host, $user, $password, $dbname);
    }


    function getDatabaseConnectionForReviews() {
        list($host, $user, $password, $dbname) = getDatabaseConnectionDetails();
        $reviewsMysqli = new mysqli($host, $user, $password, $dbname);
        if ($reviewsMysqli->connect_error) {
            die('Connect Error');
        }
        return $reviewsMysqli;
    }


