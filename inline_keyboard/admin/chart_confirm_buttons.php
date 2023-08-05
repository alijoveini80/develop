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
}
