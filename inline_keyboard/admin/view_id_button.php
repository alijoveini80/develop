<?php

function adminViewIdButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid)
            ],
        ],
    ]);
}

function adminViewIdSingleButton($pid): array
{
    return array('text' => $pid, 'callback_data' => "view-id-" . $pid);
}
