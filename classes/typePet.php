<?php


class TypePet{
    public $namePet;
    public $iconPet;

    public function __construct($namePet, $iconPet){
    $this->namePet = $namePet;
    $this->iconPet = $iconPet;
    }

    /**
     * return namePet
     *
     * @return void
     */
    public function getnamePet() {
        return $this->namePet;
    }

    public function getIconPet(){
        return $this->iconPet;
    }

    public function setnamePet($namePet) {
        $this->namePet = $namePet;
    }

    public function setIconPet($iconPet) {
        $this->iconPet = $iconPet;
    }

}