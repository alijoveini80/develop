<?php

function adminMainMenuButton()
{
    return json_encode([
        'keyboard' => [
            // [
            //     ['text' => "ارسال پیام متنی همگانی"], ['text' => "فروارد پیام همگانی"],
            // ],
            [
                ['text' => "آمار ربات"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
