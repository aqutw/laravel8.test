<?php

namespace App\Helpers;

class ExternalApiHelper {

    private $foo;

    /*
    public function __construct($foo)
    {
        $this->foo = $foo;
    }
    */

    public function foo()
    {
        return $this->foo;
    }

    public static function bar()
    {
        return app(ExternalApiHelper::class)->foo();
    }

    public static function setFoo($foo)
    {
        $apiHelper = app(ExternalApiHelper::class);
        $apiHelper->foo = $foo;
        return $apiHelper;
    }


}
