<?php 
function showImages() : string {
    $out = "<h1>Image Gallery</h1>";
    $out .= "<ul id='image'
        style='
        list-style-type:none;
        width:550px;
        border:5px solid black;'><li>";
    $totalSize = 0;
    $numberImgs = 0;
    $dir_name = "images/gallery";
    $images = glob($dir_name . "/*.jpg");
    foreach ($images as $image) {
        if ((filesize($image) < 500000) && ($totalSize < 2500000)) {
            $out .= "<img src='$image' style='
                                            height: 200px;
                                            width: 250px;
                                            border: 2px solid white;
                                            padding:5px;
                                            margin: 5px;'/>";
            $totalSize += filesize($image);
            $numberImgs++;
        }
        if (($numberImgs % 2) == 0) {
            $out .= "</li><li>";
        } 
    }
    $out .= "</li></ul>";
    return $out;
}
$info = showImages();
$style ="
<style>
nav a:nth-child(2) {
    text-decoration: underline;
}
</style>
";