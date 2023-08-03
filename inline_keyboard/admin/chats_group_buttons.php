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

function chatsGroupConfirmButton($pid, $reply_to, $ref, $url = "")
{
    if (!empty($url)) {
        return json_encode([
            'inline_keyboard' => [
                [
                    ['text' => $pid, 'callback_data' => "view-id-" . $pid], ['text' => "تایید", 'callback_data' => "umziha-" . $reply_to . "-" . $ref],
                ],
                [
                    ['text' => "تایید (ارسال شد!)", 'url' => $url],
                ],
            ],
        ]);
    }
    return json_encode([
        'inline_keyboard' => [
            [
                ['text' => $pid, 'callback_data' => "view-id-" . $pid], ['text' => "تایید", 'callback_data' => "umziha-" . $reply_to . "-" . $ref],
            ],
        ],
    ]);
}
