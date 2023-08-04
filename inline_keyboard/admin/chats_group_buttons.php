<?php

function chatsGroupConfirmButton(bool $is_confirmed, $pid, $reply_to, $ref, $url = "")
{
    if (!empty($url)) {
        return json_encode([
            'inline_keyboard' => [
                [
                    adminViewIdSingleButton($pid),
                    confirmSingleButton($is_confirmed, "umziha", $reply_to, $ref),
                ],
                [
                    sendMessageSingleButton($url),
                ],
            ],
        ]);
    }
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton($is_confirmed, "umziha", $reply_to, $ref),
            ],
        ],
    ]);
}
