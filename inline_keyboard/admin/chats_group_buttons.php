<?php

function chatsGroupConfirmButton($pid, $reply_to, $ref, $url = "")
{
    if (!empty($url)) {
        return json_encode([
            'inline_keyboard' => [
                [
                    adminViewIdSingleButton($pid),
                    confirmSingleButton(false, "umziha", $reply_to, $ref),
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
                confirmSingleButton(false, "umziha", $reply_to, $ref),
            ],
        ],
    ]);
}

function chatsGroupConfirmFeedbackButton($pid, $reply_to, $ref, $url = "")
{
    if (!empty($url)) {
        return json_encode([
            'inline_keyboard' => [
                [
                    adminViewIdSingleButton($pid),
                    confirmSingleButton(true, "umziha", $reply_to, $ref),
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
                confirmSingleButton(true, "umziha", $reply_to, $ref),
            ],
        ],
    ]);
}
