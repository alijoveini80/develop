<?php

function backToMainMenuButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
