<?php

function questionConfirmButton($pid, $reply_to, $ref, $url): array
{
    return [
        [
            sendMessageSingleButton($url),
        ],
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("question", $reply_to, $ref),
        ],
    ];
}
