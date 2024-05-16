<?php


if (isset($_GET["route"])){
        if (!empty($_GET["route"])) {

            $route = $_GET["route"];
        } else {
            $route = null;
        }
    } else {
        $route = null;
    }
    require "layout.php";
?>