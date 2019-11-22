<?php
namespace Davaramyan\Blacklist\Test;

use Davaramyan\Blacklist\BlacklistController;

class EmailValidateTest extends TestCase
{
    /**
     * Check if validate method returns
     * @return void
     */
    public function testValidateEmailMethod()
    {
        $this->assertTrue(BlacklistController::validateEmail('test@test.com'));
        $this->assertFalse(BlacklistController::validateEmail('test@test'));
    }
}