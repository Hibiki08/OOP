<?php
abstract class abstractRecept {
    public $name;
    public $ingredients;
    public $cook;
    abstract public function Recept();
}

class Recept extends abstractRecept {
    public function Recept() {
        echo $this->name;
        echo $this->ingredients;
        echo $this->cook;
    }
}