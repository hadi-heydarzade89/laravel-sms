<?php

return [
    'default' => env('SMS_PROVIDER', 'Mellipayamak'),
    'providers' => [
        "MelipayamakSMSFactory" => [
            "username" => config("melipayamak.username"),
            "password" => config("melipayamak.password"),
        ],
        "kavenegar" => [
            "apikey" => "",
        ]
    ]
];
