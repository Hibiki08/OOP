<?php
class SQL_work {
    public $name;
    public $ingredients;
    public $cook;
    public $cell;
    public $value;
    public $id;
    public $id_number;
    public function __construct() {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('ШП');
    }
    public function Insert($name, $ingredients, $cook) {
        mysql_query("INSERT INTO News (Name, Ingredients, Cook) VALUES (" . "'" . $this->name = $name . "'" . "," .
        "'" . $this->ingredients = $ingredients . "'" . "," . "'" . $this->cook = $cook . "'" . ")");
        mysql_close();
    }
    public function Update($cell, $value, $id, $id_number) {
        mysql_query("UPDATE News SET" . " " . $this->cell = $cell . "=" . "'" . $this->value = $value . "'" . " " .
        "WHERE" . " " . $this->id = $id . "=" . "'" . $this->id_number = $id_number . "'");
        mysql_close();
    }
    public function Select() {
        $selectAll = mysql_query("SELECT * FROM News");
        return $selectAll;
    }
    public function Rsort() {
        $rsort = mysql_query("SELECT *FROM News ORDER BY Date DESC");
        return $rsort;
    }
    public function SelectAll_array() {
        $array = new SQL_work;
        $select = $array->Rsort();

        while(($value = mysql_fetch_array($select)) !== false) {
            $selectAll_array[] = $value;
        }
        return $selectAll_array;
    }
}

