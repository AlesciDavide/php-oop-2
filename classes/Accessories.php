<?php
require_once __DIR__ . '/products.php';

class Accessories extends Products {
    private $materials;
    private $dimension;
    private $urlImg;

    public function __construct($name, $price, $typePet, $materials, $dimension, $urlImg) {
        parent::__construct($name, $price, $typePet);
        $this->materials = $materials;
        $this->urlImg = $urlImg;
        $this->dimension = $dimension;
        
    }

    /**
     * return materials
     *
     * @return void
     */
    public function getmaterials() {
        return $this->materials;
    }

    /**
     * return urlImg
     *
     * @return void
     */
    public function getUrlImg(){
        return $this->urlImg;
    }

    /**
     * return dimension
     *
     * @return void
     */
    public function getDimension(){
        return $this->dimension;
    }


    /**
     * set materials
     *
     * @param $materials
     * @return void
     */
    public function setmaterials($materials) {
        $this->materials = $materials;
    }

    /**
     * set urlImg
     *
     * @return void
     */
    public function setUrlImg(){
        $this->urlImg = $urlImg;
    }

    /**
     * set dimension
     *
     * @return void
     */
    public function setDimension(){
        $this->urlImg = $urlImg;
        $this->dimension = $dimension;
    }
}
