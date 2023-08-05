<?php

function newStudentGroupsConfirmButton($pid, $reply_to, $ref, $url): array
{
    return [
        [
            sendMessageSingleButton($url),
        ],
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("vizhe-ok-new", $reply_to, $ref),
        ],
    ];
}
