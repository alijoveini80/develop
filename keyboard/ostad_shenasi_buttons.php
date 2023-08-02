<?php

function ostadShenasiMainMenuButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => sendemoji('\xF0\x9F\x94\xBA') . " معرفی استاد"],
            ],
            [
                ['text' => sendemoji('\xF0\x9F\x94\xBA') . " سوال در مورد استاد"], ['text' => sendemoji('\xF0\x9F\x94\xBA') . " بهترین استاد"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}

function ostadShenasiStartButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "شروع"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
