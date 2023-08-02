<?php

function umzmediaButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "پیگیری و اعتراض"], ['text' => "رویداد و همایش"], ['text' => "اخبار و اطلاعیه"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
