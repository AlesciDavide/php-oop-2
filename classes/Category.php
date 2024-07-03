<?php


class Category {
    private $CategoryAnimals;

    public function __construct($CategoryAnimals){
        $this->CategoryAnimals = $CategoryAnimals;
    }
    /**
     * return name Category
     *
     * @return void
     */
    public function getAnimals(){
        return $this->CategoryAnimals;
    }
    /**
     * set name Category
     *
     * @param string nameCategory
     * @return void
     */
    public function setAnimals($CategoryAnimals){
        $this->CategoryAnimals = $CategoryAnimals;
    }
}
