<?php

class Food {
    private $name;
    private $urlImg;

    public function __construct($name, $urlImg){
        $this->name = $name;
        $this->urlImg = $urlImg;
    }
    /**
     * return name and url img
     *
     * @return void
     */
    public function getname(){
        return $this->name;
        return $this->urlImg;
    }
    /**
     * set name name and url
     *
     * @param string $name
     * @param string $urlImg
     * @return void
     */
    public function setAnimals($name, $urlImg){
        $this->name = $name;
        $this->urlImg = $urlImg;
    }
}
