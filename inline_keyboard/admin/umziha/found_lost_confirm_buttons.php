<?php

function foundLostConfirmButton($pid, $reply_to, $ref, $url): array
{
    return [
        [
            sendMessageSingleButton($url),
        ],
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("foundlost", $reply_to, $ref),
        ],
    ];
}
