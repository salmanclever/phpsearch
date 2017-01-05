<?php
require_once 'Reviews.php';
require_once 'Product.php';
require_once 'Users.php';

class Finder
{
    private $classList = [
        'Reviews',
        'Product',
        'Users'
    ];

    public function search($word) {
        $result = [];
        foreach ($this->classList as $className) {

            $instance = new $className;

            $result[$className] = $instance->search($word);
        }

        return $result;
    }
}



?>