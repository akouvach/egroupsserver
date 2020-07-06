<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Calculator;


class FirstTest extends TestCase {

    public function testSuma() 
    {
        $c = new Calculator();
        $this->assertEquals(5, $c->suma(3,2));


    }

}


?>