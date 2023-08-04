<?php

function chartConfirmButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton(false, "chart"),
            ],
        ],
    ]);
}
