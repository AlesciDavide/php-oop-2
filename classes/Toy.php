<?php
require_once __DIR__ . '/products.php';

class Toy extends Products {
    private $characteristics;
    private $dimension;
    private $urlImg;

    /**
     * Construct for product toy
     *
     * @param [type] $name
     * @param [type] $price
     * @param [type] $typePet
     * @param [type] $characteristics
     */
    public function __construct($name, $price, $typePet, $characteristics, $dimension, $urlImg) {
        parent::__construct($name, $price, $typePet);
        $this->characteristics = $characteristics;
        $this->dimension = $dimension;
        $this->urlImg = $urlImg;
    }

    /**
     * return characteristics
     *
     * @return void
     */
    public function getcharacteristics() {
        return $this->characteristics;
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
     * set characteristics
     *
     * @param $characteristics
     * @return void
     */
    public function setcharacteristics($characteristics) {
        $this->characteristics = $characteristics;
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
