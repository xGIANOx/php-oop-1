<?php
class Category{
    public $category_name;
    public $recommended_age;

    public function __construct($category_name, $recommended_age){
        $this->category_name = $category_name;
        $this->recommended_age = $recommended_age;
    }
}
?>
