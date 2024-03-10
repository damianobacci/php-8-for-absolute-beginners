<?php
function upload() {
    include_once "classes/Uploader.class.php";
    $uploader = new Uploader("image-data");
    $uploader->saveIn("images/gallery");
    $fileUploaded = $uploader->save();
    if ($fileUploaded) {
        $out = "<p>File uploaded!</p>";
    } else {
        $out = "<p>Something went wrong...</p>";
    }
    return $out;
}

$fileIsSubmitted = isset($_POST["new-image"]);
if ($fileIsSubmitted) {
    $info = upload();
} else {
    $info = "
        <h1>Upload an image</h1>
        <form method='post' action='index.php?page=upload' enctype='multipart/form-data'>
        <label class='label' for='image-data'>Search your system for an image to upload:</label>
        <input type='file' name='image-data' accept='image/jpeg'/>
        <input type='submit' value='upload' name='new-image'/>
        </form>";
}

$style ="
<style>
nav a:nth-child(3) {
    text-decoration: underline;
}
</style>
";