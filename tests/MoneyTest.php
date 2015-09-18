<?php

namespace MarcosSegovia\MoneyTest;

use MarcosSegovia\Money\Money;
use MarcosSegovia\Money\Franc;
use MarcosSegovia\Money\Dollar;



class MoneyTest extends \PHPUnit_Framework_TestCase
{

    public function testDollarEquality()
    {
        $five = Money::dollar(5);
        $this->assertTrue($five->equals(Money::dollar(5)));
        $this->assertFalse($five->equals(Money::dollar(6)));
    }

    public function testFrancEquality()
    {
        $five = Money::franc(5);
        $this->assertTrue($five->equals(Money::franc(5)));
        $this->assertFalse($five->equals(Money::franc(6)));
    }

    public function testEquality()
    {
        $fiveDollar = Money::dollar(5);
        $this->assertTrue($fiveDollar->equals(Money::dollar(5)));
        $this->assertFalse($fiveDollar->equals(Money::dollar(6)));
        $fiveFranc = Money::franc(5);

        $this->assertFalse($fiveFranc->equals(Money::dollar(5)));
    }

    public function testMultiplication()
    {
        $fiveDollar = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $fiveDollar->multiply(2));
        $this->assertEquals(Money::dollar(15), $fiveDollar->multiply(3));
    }

    public function testCurrency()
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}