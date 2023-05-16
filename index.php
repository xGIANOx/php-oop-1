<?php

class Category{
    public $category_name;
    public $recommended_age;

    public function __construct($category_name, $recommended_age){
    $this->category_name = $category_name;
    $this->recommended_age = $recommended_age;

}
}

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
        $this->category=$_category;
    }

    public function getCategory($_category){
        return $this->category;
    }
    
    public function setYear($_year){
        $this->year=$_year;
    }

    public function getYear($_year){
        return $this->year;
    }
    
    public function setName($_name){
        $this->name=$_name;
    }

    public function getName($_name){
        return $this->name;
    }
}


$movie_1 = new Movie(new Category('Action', '18+'), '1986', 'Top Gun');
var_dump($movie_1);

$movie_2 = new Movie(new Category('Commedy', 'All'), '2021', 'LOL');
var_dump($movie_2);