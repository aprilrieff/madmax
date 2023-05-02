<?php
// Define site-wide variables
define("APPROOT", dirname(__FILE__, 2));
if($_SERVER["HTTP_HOST"] == "localhost") {
    // localhost
    $debug = true;
    define("URLROOT", "http://localhost/madmax"); // Change mvc to whatever the current project is
    define("DB_PORT", "3307");
    define("DB_HOST", "127.0.0.1");
    define("DB_USER", "root");
    define("DB_PASS", "password");
    define("DB_NAME", "madmax"); // Needs to change based on project

} else if ($_SERVER["HTTP_HOST"] == "march69.sg-host.com"){
    $debug = false;
    define("URLROOT", "https://". $_SERVER["HTTP_HOST"]."/madmax"); // Remove mvc if this is the only project on the server

    // siteground only - for heroku, use a .env file
    define("DB_HOST", "localhost");
    define("DB_PORT", "3306");
    define("DB_USER", "uu6nb7hnmgqhs");
    define("DB_PASS", "62n*7W%z@~4@");
    define("DB_NAME", "dbeyis6dtphykn");

////    Planetscale (for Heroku, use a .env file)
//    define("DB_HOST", "us-east.connect.psdb.cloud");
//    define("DB_PORT", "3306"); // unknown
//    define("DB_USER", "yokdj6vy1tueuyuidj8p");
//    define("DB_PASS", "pscale_pw_c6cQzfmGHnaUEj7tfIOaYV49HqbgJFCKL5yAdSSaord");
//    define("DB_NAME", "kirkwood-php-test");
}
define("SITENAME", "Mad Max");
define("ADDRESS", "1120 Depot Lane SE Cedar Rapids, IA 52401");
define("PHONE", "(319)431-0004");
define("EMAIL", "info@madmax.com");
define("WEEK_HOURS", "11am to 10pm");
define("WEEKEND_HOURS", "11am to 11pm");
define("HOLIDAY_HOURS", "Closed");