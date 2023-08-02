<?php

function chartButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "ارسال چارت"],
            ],
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
