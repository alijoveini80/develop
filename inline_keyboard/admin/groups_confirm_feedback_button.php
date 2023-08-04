<?php

function groupsConfirmButton(bool $is_confirmed, $pid, $reply_to, $ref, $url = "")
{
    return json_encode([
        'inline_keyboard' => [
            [
                sendMessageSingleButton($url),
            ],
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton($is_confirmed, "vizhe-ok", $reply_to, $ref),
            ],
        ],
    ]);
}

// function groupsConfirmFeedbackButton(array $rows, $reply_to = "")
// {
//     $buttons = [];
//     foreach ($rows as $row) {
//         array_push($buttons, $row);
//     }
//     if (!empty($reply_to)) {
//         array_push($buttons, [
//             confirmSingleButton(true, "vizhe-ok", $reply_to),
//             // ['text' => "تایید (ارسال شد!)", 'callback_data' => "vizhe-ok" . $reply_to],
//         ]);
//         return json_encode([
//             'inline_keyboard' => $buttons
//         ]);
//     }
//     array_push($buttons, [
//         confirmSingleButton(true, "vizhe-ok"),
//         // ['text' => "تایید (ارسال شد!)", 'callback_data' => "vizhe-ok"],
//     ]);
//     return json_encode([
//         'inline_keyboard' => $buttons
//     ]);
// }