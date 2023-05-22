<?php
// connect to database
const ROOT = "http://localhost/music_website/public";
const DBDRIVER = "mysql";
const DBHOST = "localhost";
const DBUSER = "root";
const DBPASS = "";
const DBNAME = "music_website_db";

//// check connection
//try {
//    $con = new PDO(DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
//    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}