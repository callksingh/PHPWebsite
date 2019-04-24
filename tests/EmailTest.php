<?php
declare(strict_types=1);

//use PHPUnit\Framework\TestCase;

use buddy\phpwebsite\src;

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