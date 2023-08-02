<?php

function sendStudyGroupsButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "ارسال گروه کلاسی"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}