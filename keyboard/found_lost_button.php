<?php

function foundLostButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => sendemoji('\xE2\x9D\x8C') . " گم کردم"], ['text' => sendemoji('\xE2\x9C\x85') . " پیدا کردم"],
            ],
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
