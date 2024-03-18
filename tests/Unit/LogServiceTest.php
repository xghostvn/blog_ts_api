<?php

namespace Tests\Unit;

use App\Http\Controllers\LogServiceController;
use App\Repositories\User\UserRepository;
use PHPUnit\Framework\TestCase;

class LogServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_get_repository()
    {
//        $mock = $this->getMockBuilder(UserRepository::class)->set->getMock();
//        dd($mock->getModel());
//        $userRepository =  app()->make(UserRepository::class);
        $userRepositoryMock = $this->createMock(UserRepository::class);
//        $result = $userRepositoryMock->getModel();
        $logController = new LogServiceController($userRepositoryMock);
        $userRepositoryMock
            ->expects($this->once())
            ->method("getModel")
            ->willReturn(1);

        $result =  $logController->getRepository();

        $this->assertIsNumeric($result);
    }
}
