<?php 
(string) $nav = "";
(string) $info = "";
include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Damiano Bacci PHP Portfolio";
$pageData->css = "<link rel='stylesheet' href='css/layout.css'/>";
$pageData->content = $nav;
if (isset($_GET['page'])) {
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