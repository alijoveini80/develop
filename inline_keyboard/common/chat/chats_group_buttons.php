<?php

function chatsGroupConfirmButton($pid, $reply_to, $ref, $url): array
{
    return [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("umziha", $reply_to, $ref),
        ],
        [
            sendMessageSingleButton($url),
        ],
    ];
}
