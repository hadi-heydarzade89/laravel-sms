<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\BaseController;

class SMSController extends BaseController
{
    public function __invoke()
    {
        $className = __NAMESPACE__ . "\Providers\\" . ucfirst(getenv('SMS_PROVIDER')) . "SMSProvider";

        $class = new $className();
        dd([$class->request('09366640330', '09203192660', 'hadi'),$className]);

    }
}
