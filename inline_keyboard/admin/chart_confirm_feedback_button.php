<?php

function chartConfirmFeedbackButton($callback)
{
    return json_encode([
        'inline_keyboard' => [
            [
                ['text' => "تایید (ارسال شد!)", 'callback_data' => $callback],
            ],
        ],
    ]);
}
