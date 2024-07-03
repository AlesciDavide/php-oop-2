<?php


class TypePet{
    private $namePet;

    public function __construct($namePet){
    $this->namePet = $namePet;
    }

    /**
     * return namePet
     *
     * @return void
     */
    public function getnamePet() {
        return $this->namePet;
    }

    public function setnamePet($namePet) {
        $this->namePet = $namePet;
    }

}