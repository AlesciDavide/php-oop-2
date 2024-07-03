<?php
require_once __DIR__ . '/products.php';

class Accessories extends Products {
    private $materials;

    public function __construct($name, $price, $category, $typePet, $materials) {
        parent::__construct($name, $price, $category, $typePet);
        $this->materials = $materials;
        
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
     * set materials
     *
     * @param $materials
     * @return void
     */
    public function setmaterials($materials) {
        $this->materials = $materials;
    }

    
}
