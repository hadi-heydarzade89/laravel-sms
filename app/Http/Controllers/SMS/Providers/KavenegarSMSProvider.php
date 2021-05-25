<?php


namespace App\Http\Controllers\SMS\Providers;

use Kavenegar;

class KavenegarSMSProvider extends SMSProvider
{

    public function request($sender, $receptor, $message)
    {
        $this->smsProvider = Kavenegar::class;
        return [$sender, $receptor, $message];// $this->smsProvider->Send($sender,$receptor, $message);
    }
}
