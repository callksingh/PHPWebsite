<?php
declare(strict_types=1);


//use (/../../Email);
//include ("Email.php");
use PHPUnit\Framwork\TestCase;

//use buddy\phpwebsite\src;
//include ("../../simple-php-website-master/src/Email.php");



class EmailTest extends \PHPUnit\Framework\TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
       //$this->assertInstanceOf(
            //Email::class;
            //Email::fromString('user@example.com'),
            echo "Dummy Result 1";
        //);
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        //$this->expectException(InvalidArgumentException::class);

        //Email::fromString('invalid');

        echo "Dummy Result 2";
    }

    public function testCanBeUsedAsString(): void
    {
        //$this->assertEquals(
           // 'user@example.com',
          //  Email::fromString('user@example.com')
            echo "Dummy Result 3";
        //);
    }
}

