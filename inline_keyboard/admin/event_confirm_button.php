<?php

function eventConfirmButton($is_confirmed, $pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton($is_confirmed, "event"),
            ],
        ],
    ]);
}
