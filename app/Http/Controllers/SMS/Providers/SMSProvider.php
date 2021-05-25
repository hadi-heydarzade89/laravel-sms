<?php


namespace App\Http\Controllers\SMS\Providers;


abstract class SMSProvider
{
    protected $smsProvider;

    abstract public function request($sender, $receptor, $message);
}
