<?php
require_once __DIR__ . '/products.php';

class Accessories extends Products {
    private $materials;
    private $urlImg;

    public function __construct($name, $price, $category, $typePet, $materials, $urlImg) {
        parent::__construct($name, $price, $category, $typePet);
        $this->materials = $materials;
        $this->urlImg = $urlImg;
        
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
}
