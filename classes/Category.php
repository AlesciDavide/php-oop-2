<?php


class Category {
    private $category;

    public function __construct($category){
    $this->category = $category;
    }

    /**
     * return category
     *
     * @return void
     */
    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}
