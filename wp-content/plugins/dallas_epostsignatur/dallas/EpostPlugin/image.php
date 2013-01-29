<?php

class Dallas_EpostPlugin_Image {

    protected $image;
    protected $mime;
    protected $width;
    protected $height;
    protected $attr;

    public function getImage() {
        return $this->image;
    }

    public function getMine() {
        return $this->mime;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getAttr() {
        return $this->attr;
    }

    function __construct($fn) {
        
        $info = getimagesize($fn);
        $this->width = $info[0];
        $this->height = $info[1];
        $this->attr = $info[2];
        $this->mime = $info['mime'];

        switch ($this->mime) {
            case 'image/jpeg':
                $this->image = imagecreatefromjpeg($fn);
                break;

            case 'image/png':
                $this->image = imagecreatefrompng($fn);
                break;

            case 'image/gif':
                $this->image = imagecreatefromgif($fn);
                break;
        }
    }

    function output() {

        switch ($this->mime) {

            case 'image/jpeg':
                header("Content-Type: image/jpg");
                imagejpeg($this->image);
                break;

            case 'image/png':
                header("Content-Type: image/png");
                imagepng($this->image);
                break;

            case 'image/gif':
                header("Content-Type: image/gif");
                imagegif($this->image);
                break;
        }
    }

    function __destruct() {
        // imagedestroy($this->image);
    }

}