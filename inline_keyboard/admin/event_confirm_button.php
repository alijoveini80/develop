<?php

function eventConfirmButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton(false, "event"),
            ],
        ],
    ]);
}

function eventConfirmFeedbackButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton(true, "event"),
            ],
        ],
    ]);
}