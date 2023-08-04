<?php

function checkJoinToSponsorChannelButton($index)
{
    return json_encode([
        'inline_keyboard' => [
            [
                ['text' => "عضو شدم!", 'callback_data' => "get-status" . $index],
            ],
        ],
    ]);
}
