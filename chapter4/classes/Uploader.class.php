<?php
class Uploader {
    private $fileName;
    private $fileData;
    private $destination;
    public function __construct($key) {
        $this->fileName = $_FILES[$key]['name'];
        $this->fileData = $_FILES[$key]['tmp_name'];
    }
    public function saveIn($folder) {
        $this->destination = $folder;
    }
    public function save() {
        $folderIsWritable = is_writable($this->destination);
        if ($folderIsWritable) {
            $name = "$this->destination/$this->fileName";
            $success = move_uploaded_file($this->fileData, $name);
        } else {
            $success = false;
        }
        return $success;
    }
}