<?php 
(string) $nav = "";
(string) $info = "";
include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Simple dynamic webpage in PHP";
$pageData->css = "<link rel='stylesheet' href='css/layout.css'/>";
$pageData->content = $nav;
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "skills";
}
include_once "views/$fileToLoad.php";
$pageData->content .= $info;
$pageData->embeddedStyle = $style;

require 'templates/page.php'; //single comment
echo $page;

?>