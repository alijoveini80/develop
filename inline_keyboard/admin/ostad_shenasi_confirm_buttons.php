<?php

function ostadShenasiConfirmButton($from_id, $msg_id, $reply_to)
{
    $deeplink = base64url_encode($from_id . "_" . $msg_id . "_report");
    return json_encode([
        'inline_keyboard' => [
            [
                /*['text' => "به اشتراک بگذارید", 'switch_inline_query' => "ostad-shenasi->" . $msg_id],*/
                /*['text' => "کامنت ها", 'login_url' => ['url' => "https://comments.bot/thread/" . $page, 'bot_username' => "@CommentsBot"]],*/
                ['text' => "گزارش خطا", 'url' => "https://t.me/" . BOT_ID . "?start=" . $deeplink],
            ],
            [
                adminViewIdSingleButton($from_id),
                confirmSingleButton(false, "ostadOK", $reply_to),
                // ['text' => "تایید", 'callback_data' => "ostadOK" . $reply_to],
            ],
        ],
    ]);
}

function ostadShenasiQuestionConfirmButton($from_id, $msg_id, $reply_to)
{
    $deeplink = base64url_encode($from_id . "_" . $msg_id . "_q-ostad");
    $deeplink2 = base64url_encode($from_id . "_" . $msg_id . "_q-report");
    return json_encode([
        'inline_keyboard' => [
            [
                ['text' => "پاسخ ارسال شده", 'callback_data' => $from_id . "_" . $msg_id . "_read-answer_" . $msg_id],
                ['text' => "ارسال پاسخ", 'url' => "https://t.me/" . BOT_ID . "?start=" . $deeplink],
            ],
            [
                /*['text' => "به اشتراک بگذارید", 'switch_inline_query' => "ostad-shenasi->" . $msg_id],*/
                /*['text' => "کامنت ها", 'login_url' => ['url' => "https://comments.bot/thread/" . $page, 'bot_username' => "@CommentsBot"]],*/
                reportOstadShenasiSingleButton("https://t.me/" . BOT_ID . "?start=" . $deeplink2)
                // ['text' => "گزارش خطا", 'url' => "https://t.me/" . BOT_ID . "?start=" . $deeplink],
            ],
            [
                adminViewIdSingleButton($from_id),
                confirmSingleButton(false, "ostadOK", $reply_to),
                // ['text' => "تایید", 'callback_data' => "ostadOK" . $reply_to],
            ],
        ],
    ]);
}

function ostadShenasiConfirmFeedbackButton(array $rows, $reply_to = "")
{
    $buttons = [];
    foreach ($rows as $row) {
        $row_buttons = [];
        foreach ($row as $element) {
            if (array_key_exists("text", $element)) {
                if ($element["text"] == "تایید") {
                    $element["text"] = "تایید (ارسال شد!)";
                }
            }
            array_push($row_buttons, $element);
        }
        array_push($buttons, $row_buttons);
    }

    return json_encode([
        'inline_keyboard' => $buttons
    ]);
}

function ostadShenasiQuestionConfirmFeedbackButton(array $rows, $reply_to = "")
{
    $buttons = [];
    foreach ($rows as $row) {
        array_push($buttons, $row);
    }
    if (!empty($reply_to)) {
        array_push($buttons, [
            confirmSingleButton(true, "q-ostad-ok", $reply_to),
            // ['text' => "تایید (ارسال شد!)", 'callback_data' => "q-ostad-ok" . $reply_to],
        ]);
        return json_encode([
            'inline_keyboard' => $buttons
        ]);
    }
    array_push($buttons, [
        confirmSingleButton(true, "q-ostad-ok", $reply_to),
        // ['text' => "تایید (ارسال شد!)", 'callback_data' => "q-ostad-ok"],
    ]);
    return json_encode([
        'inline_keyboard' => $buttons
    ]);
}

function reportOstadShenasiSingleButton($url)
{
    return array('text' => "گزارش خطا", 'url' => $url);
}
