<?php

namespace App\Http\Controllers;


use Illuminate\Support\LazyCollection;
use App\Repositories\User\IUserRepository;

class LogServiceController extends  Controller
{

    static $a = 1;
    protected  $repository;
    public function __construct(IUserRepository $repository)
    {
        dd(1);
        $this->repository = $repository;
    }

    /**
     * @throws \Exception
     */
    public function getRepository()
    {
//        LazyCollection::times(INF)
//            ->filter(fn ($number) => $number % 2 == 0)
//            ->take(1000)
//            ->each(fn ($number) => dump($number));
        $a = 1;
        $b =2;
        LazyCollection::times(5)->each(function ($item) {
            dump($item);
        });
    }

    function generateData()
    {

    }

    public function createUser($data)
    {
        return \App\Models\User::create($data);
    }


    public static function staticFunc()
    {
        return "concrete static func";
    }

    public function notStaticFunc()
    {
        return "concrete not static func"; // TODO: Change the autogenerated stub
    }

    public function testStaticValue()
    {
        return response()->json([
            "a" => static::$a ,
            "b" => static::staticFunc(),
            "c" => $this->notStaticFunc()
        ]);
    }
}
