<?php
abstract class Recept {
    public $name;
    public $ingredients;
    public $cook;
    abstract public function Recept($name, $ingredients, $cook);
}

