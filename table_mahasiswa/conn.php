<?php

    function getConnection() {
        return
        new PDO("mysql:host=localhost;dbname=dbmahasiswa", "nugraha", "", [PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    }
?>