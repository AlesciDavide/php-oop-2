<?php

class Products {
    private $name;
    private $price;
    private $category;
    private $ingredients;
    private $typePet;

    public function __construct($name, $price, $category, $ingredients, $typePet) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->ingredients = $ingredients;
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
     * return Ingredients of products
     *
     * @return void
     */
    public function getIngredients(){
        return $this->ingredients;
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
     * set  ingredients
     *
     * @param $ingredients
     * @return void
     */
    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
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
