<?php


namespace App\Http\Controllers\SMS\Providers;

use Melipayamak;

class MelipayamakSMSProvider extends SMSProvider
{

    public function request($sender, $receptor, $message)
    {
        $this->smsProvider = Melipayamak::sms();
        return[$sender, $receptor, $message];// $this->smsProvider->send($receptor, $sender, $message);
    }
}
