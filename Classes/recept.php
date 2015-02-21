<?php
abstract class abstractRecept {
    public $name;
    public $ingredients;
    public $cook;
    abstract public function Recept($name, $ingredients, $cook);
}

class Recept extends abstractRecept {
    public function Recept($name, $ingredients, $cook) {
        echo $this->name = $name;
        echo $this->ingredients = $ingredients;
        echo $this->cook = $cook;
    }
}