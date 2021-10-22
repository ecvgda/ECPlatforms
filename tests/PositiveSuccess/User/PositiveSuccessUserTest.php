<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;



class PositiveSuccessUserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new User();
        $this->user->setAge(13);
    }
    protected function tearDown(): void
    {

    }

    public function testAgeWithSameAssert() {
        $this->assertSame(13, $this->user->getAge());
    }


    public function testAgeWithEqualsAssert() {

        $this->assertEquals('13', $this->user->getAge());

    }


}