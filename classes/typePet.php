<?php


class TypePet{
    private $typePet;

    public function __construct($typePet){
    $this->typePet = $typePet;
    }

    /**
     * return typePet
     *
     * @return void
     */
    public function gettypePet() {
        return $this->typePet;
    }

    public function settypePet($typePet) {
        $this->typePet = $typePet;
    }

}