<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 8
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // CS50 Library
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");
    
    // enable $_SESSION
    @session_start();
    
    // require authentication for favorites.php
    if (in_array($_SERVER["PHP_SELF"], ["/favorites.php", "/like.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

?>