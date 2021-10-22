<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;



class NegativeSuccessUserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new User();
        $this->user->setUserName("Richard");
    }
    protected function tearDown(): void
    {

    }

    public function userProvider(){
        return [
            'one' => ["Ivan"],
            'two' => ["Lory"],
            'three' => [13],
        ];
    }

    /**
    * @dataProvider userProvider
    */
    public function testNameWithDataProviderEqualsAssert($providersName) {
        $this->assertNotSame($providersName, $this->user->getUserName());
    }


    public function testNameWithEqualsAssert() {

        $this->assertNotEquals("Richars", $this->user->getUserName());

    }


}