<?php

class Products {
    private $food;
    private $category;

    public function __construct( Food $food, Category $category){
        $this->food = $food;
        $this->category = $category;
    }
    /**
     * return name products, url img and category
     *
     * @return void
     */
    public function getproducts(){
        return $this->food;
        return $this->category;
    }
    /**
     * set food and category 
     *
     * @param string food
     * @param string namecategory
     * @return void
     */
    public function setproducts(food $food, Category $category){
        $this->food = $food;
        $this->category = $category;
    }
}
