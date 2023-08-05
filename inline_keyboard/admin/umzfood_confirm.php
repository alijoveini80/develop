<?php

function umzfoodButton($pid, $reply_to, $ref, $url): array
{
    return [
        [
            sendMessageSingleButton($url),
        ],
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("self-ok", $reply_to, $ref),
        ],
    ];
}
