<?php

function umzihaButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "پرسش و پاسخ"], ['text' => "نیازهای دانشجویی"],
            ],
            [
                ['text' => "توئیت و عکس و فیلم"], ['text' => "گمشده و پیداشده"],
            ],
            [
                ['text' => "استاد شناسی"], ['text' => "گروه های کلاسی"],
            ],
            [
                ['text' => "چارت درسی"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
