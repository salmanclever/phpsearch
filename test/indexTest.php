<?php
    require_once('../vendor/autoload.php');
//    require_once('../index.php');
    use PHPUnit\Framework\TestCase;


class Money{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function negate(){
        return new Money(-1 * $this->amount);
    }
}


    class MoneyTest extends TestCase
    {
        public function testCanBeNegated(){
            $word = "juice";

            $result = Module::search($word);


        }
    }


?>