<?php

function sendInlineReplyMarkup(array $buttons)
{
    return json_encode([
        'inline_keyboard' => $buttons,
    ]);
}
