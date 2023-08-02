<?php

function mainMenuButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "رسانه دانشگاه | UmzMedia"],
            ],
            [
                ['text' => "کانال دانشجویی | UmziHa"],
            ],
            [
                ['text' => "سلف دانشگاه | UmzFood"],
            ],
            [
                ['text' => "پیام ناشناس به AloUmz"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
