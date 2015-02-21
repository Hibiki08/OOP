<?php
include_once __DIR__ . '\SQL.php';

class BD_otladchik extends SQL_work {
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