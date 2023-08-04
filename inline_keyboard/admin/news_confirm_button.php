<?php

function newsConfirmButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton(false, "news"),
            ],
        ],
    ]);
}

function newsConfirmFeedbackButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton(true, "news"),
            ],
        ],
    ]);
}