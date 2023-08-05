<?php

function chartConfirmButton($pid)
{
    $buttons = [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton(false, "chart"),
        ],
    ];
    return sendInlineReplyMarkup($buttons);
    // return json_encode([
    //     'inline_keyboard' => [
    //         [
    //             adminViewIdSingleButton($pid),
    //             confirmSingleButton(false, "chart"),
    //         ],
    //     ],
    // ]);
}
