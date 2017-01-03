<?php

require_once('array.php');

interface pTemplate{
    public function search($data);
    public function showitem();
    public function insertitem($item);
    public function deleteitem($item);
}


class Terminal{
    public static $data = [];
    public $result = [];

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function searchs(){
    }

}

class Products implements pTemplate{
    public function search($data)
    {
        // TODO: Implement search() method.
    }

    public function showitem()
    {
        // TODO: Implement showitem() method.
    }

    public function insertitem($item)
    {
        // TODO: Implement insertitem() method.
    }

    public function deleteitem($item)
    {
        // TODO: Implement deleteitem() method.
    }
}
class Users implements pTemplate{
    public function search($data)
    {
        // TODO: Implement search() method.
    }
    public function showitem()
    {
        // TODO: Implement showitem() method.
    }
    public function insertitem($item)
    {
        // TODO: Implement insertitem() method.
    }
    public function deleteitem($item)
    {
        // TODO: Implement deleteitem() method.
    }

}
class Reviews implements pTemplate{
    public function search($data)
    {
        // TODO: Implement search() method.
    }

    public function showitem()
    {
        // TODO: Implement showitem() method.
    }

    public function insertitem($item)
    {
        // TODO: Implement insertitem() method.
    }

    public function deleteitem($item)
    {
        // TODO: Implement deleteitem() method.
    }

}



?>