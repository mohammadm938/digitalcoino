<?php
include_once "db.php";

class ContactUS extends db
{
    protected $tbl="contactus";

    public function sendMessage($data)
    {
        $filds=array_keys($data);
        $this->setTbl($this->tbl);
        $this->insertData($filds,$data);
    }
}
?>