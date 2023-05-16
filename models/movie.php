<?php
class Movie {
    public $category;
    public $year;
    public $name;

    public function __construct(Category $_category, $_year, $_name){
        $this->setCategory($_category);
        $this->setYear($_year);
        $this->setName($_name);
    }

    public function setCategory($_category){
        $this->category = $_category;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setYear($_year){
        $this->year = $_year;
    }

    public function getYear(){
        return $this->year;
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }
}
?>
