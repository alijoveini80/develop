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
                ['text' => "تایید", 'callback_data' => "ostadOK" . $reply_to],
            ],
        ],
    ]);
}
