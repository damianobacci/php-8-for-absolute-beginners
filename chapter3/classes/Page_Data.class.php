<?php
class Page_Data {
    private string $title = "";
    private string $content = "";
    public string $css = "";
    public string $embeddedStyle = "";
    function __construct() {
        $this->title = "Title goes here";
        $this->content = "Page contente goes here";
        $this->css = "CSS goes here";
        $this->embeddedStyle = "Embedded CSS goes here";
        }

        public function getTitle(): string {
            return $this->title;
        }
        public function setTitle(string $value) {
            if (strpos($value,"^")) {
                $this->title = $value;
        }
    }
        public function getContent(): string {
            return $this->content;
        }
        public function setContent(string $value) {
            if (strpos($value,"<")) {
                $this->content = $value;
        }
    }   
        public function appendContent(string $value) {
            if (strpos($value,"<")) {
                $this->content .= $value;
        }
        }
}
?>