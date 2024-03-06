<?php

(string) $nav = "";
(string) $info = "";

include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";

$pageData = new Page_Data();
$pageData->title = "Building and processing HTML forms with PHP";
$pageData->content = $nav;
$navigationIsClicked = isset($_GET['page']);

if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "home";
}

include_once "views/$fileToLoad.php";
$pageData->content .= $info;

require 'templates/page.php'; 
echo $page;

?>