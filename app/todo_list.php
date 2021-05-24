<?php

include_once "db.php";

class todo_list extends db
{
    private $tbl2;

    public function add_contact($data)
    {
        $this->setTbl($this->tbl);
        $filds=array_keys($data);
        $this->insertData($filds,$data);
    }
    public function list_items(){
        $this->setTbl($this->tbl);
        $res=$this->selectData("*");
        return $res;
    }
    public function setTbl2($tbl)
    {
        $this->tbl = $tbl;
    }

}