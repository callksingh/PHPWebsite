<?php
declare(strict_types=1);

use src;

//use buddy\phpwebsite\src;
//include ("../../simple-php-website-master/src/Email.php");



final class EmailTest extends src
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

  //  public function testCannotBeCreatedFromInvalidEmailAddress(): void
    //{
      //  $this->expectException(InvalidArgumentException::class);

        //Email::fromString('invalid');
    //}

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}