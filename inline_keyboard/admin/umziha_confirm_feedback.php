<?php

function umzihaConfirmFeedback(array $rows, $reply_to = "")
{
    $buttons = [];
    foreach ($rows as $row) {
        array_push($buttons, $row);
    }
    if (!empty($reply_to)) {
        array_push($buttons, [
            ['text' => "تایید (ارسال شد!)", 'callback_data' => "yes" . $reply_to],
        ]);
        return json_encode([
            'inline_keyboard' => $buttons
        ]);
    }
    array_push($buttons, [
        ['text' => "تایید (ارسال شد!)", 'callback_data' => "yes"],
    ]);
    return json_encode([
        'inline_keyboard' => $buttons
    ]);
}
