<?php

function groupsConfirmFeedbackButton(array $rows, $reply_to = "")
{
    $buttons = [];
    foreach ($rows as $row) {
        array_push($buttons, $row);
    }
    if (!empty($reply_to)) {
        array_push($buttons, [
            ['text' => "تایید (ارسال شد!)", 'callback_data' => "vizhe-ok" . $reply_to],
        ]);
        return json_encode([
            'inline_keyboard' => $buttons
        ]);
    }
    array_push($buttons, [
        ['text' => "تایید (ارسال شد!)", 'callback_data' => "vizhe-ok"],
    ]);
    return json_encode([
        'inline_keyboard' => $buttons
    ]);
}