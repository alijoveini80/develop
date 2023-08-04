<?php

function newStudentGroupsConfirmButton(bool $is_confirmed, $pid, $reply_to, $ref, $url)
{
    return json_encode([
        'inline_keyboard' => [
            [
                sendMessageSingleButton($url),
            ],
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton($is_confirmed, "vizhe-ok-new", $reply_to, $ref),
            ],
        ],
    ]);
}
