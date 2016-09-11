<?php

class Gallery
{
    public $path;
    
    public function __construct()
    {
        $this->path  = __FILE__ . '/images';
    }
    
    public function setPath($path)
    {
        if (substr($path, -1) === '/') {
            $this->path = substr($path, 0, -1);
        }
        $this->path = $path;
        return $this;
    }
    
    public function getImages($extensions = array('jpg', 'png'))
    {
        $images = $this->getDirectory($this->path);
        foreach($images as $index => $image) {
            $array = explode('.', $image);
            $extension = strtolower(end($array));
            if (!in_array($extension, $extensions)) {
                unset($images[$index]);
            } else {
                $images[$index] = array(
                    'full'  => $this->path . '/' . $image,
                    'thumb' => $this->path . '/thumbs/' . $image
                );    
            }
        }
        return $images;
        
        
    }
    
    private function getDirectory($path)
    {
        return scandir($path);
    }
}