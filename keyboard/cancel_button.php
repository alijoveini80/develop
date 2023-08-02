<?php

function cancelButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
