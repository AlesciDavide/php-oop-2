<?php

class Products {
    private $name;
    private $price;
    private $typePet;

    public function __construct($name, $price, $typePet) {
        $this->name = $name;
        $this->price = $price;
        $this->typePet = $typePet;
    }

    /**
     * return Name of products
     *
     * @return void
     */
    public function getName() {
        return $this->name;
    }

    /**
     * return Price of products
     *
     * @return void
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * return Category of products
     *
     * @return void
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * return typePet of products
     *
     * @return void
     */
    public function gettypePet() {
        return $this->typePet;
    }
    
    /**
     * set Name
     *
     * @param string $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * set Price
     *
     * @param $price
     * @return void
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * set Category
     *
     * @param $category
     * @return void
     */
    public function setCategory($category) {
        $this->category = $category;
    }

    /**
     * set typePet
     *
     * @param $typePet
     * @return void
     */
    public function setTypePet($typePet) {
        $this->typePet = $typePet;
    }
}
