<?php

function chatsGroupButton($pid, $reply_to, $ref)
{
    return json_encode([
        'inline_keyboard' => [
            [
                ['text' => $pid, 'callback_data' => "view-id-" . $pid], ['text' => "تایید", 'callback_data' => "umziha-" . $reply_to . "-" . $ref],
            ],
        ],
    ]);
}
