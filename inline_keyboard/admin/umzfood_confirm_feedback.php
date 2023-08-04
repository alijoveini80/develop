<?php

function umzfoodButton(bool $is_confirmed, $pid, $reply_to, $ref, $url = "")
{
    return json_encode([
        'inline_keyboard' => [
            [
                sendMessageSingleButton($url),
            ],
            [
                adminViewIdSingleButton($pid),
                confirmSingleButton($is_confirmed, "self-ok", $reply_to, $ref),
            ],
        ],
    ]);
}


// function umzfoodConfirmFeedback(array $rows, $reply_to = "")
// {
//     $buttons = [];
//     foreach ($rows as $row) {
//         array_push($buttons, $row);
//     }
//     if (!empty($reply_to)) {
//         array_push($buttons, [
//             ['text' => "تایید (ارسال شد!)", 'callback_data' => "self-ok" . $reply_to],
//         ]);
//         return json_encode([
//             'inline_keyboard' => $buttons
//         ]);
//     }
//     array_push($buttons, [
//         ['text' => "تایید (ارسال شد!)", 'callback_data' => "self-ok"],
//     ]);
//     return json_encode([
//         'inline_keyboard' => $buttons
//     ]);
// }