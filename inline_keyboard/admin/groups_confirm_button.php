<?php

function groupsConfirmButton($pid, $reply_to, $ref, $url): array
{
    return [
        [
            sendMessageSingleButton($url),
        ],
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("vizhe-ok", $reply_to, $ref),
        ],
    ];
}
