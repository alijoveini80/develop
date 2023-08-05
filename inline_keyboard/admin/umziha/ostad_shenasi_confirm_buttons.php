<?php

function ostadShenasiConfirmButton($from_id, $msg_id, $reply_to): array
{
    $deeplink = base64url_encode($from_id . "_" . $msg_id . "_report");
    return [
        [
            reportOstadShenasiSingleButton($deeplink)
        ],
        [
            adminViewIdSingleButton($from_id),
            confirmSingleButton("ostadOK", $reply_to),
        ],
    ];
}

function ostadShenasiQuestionConfirmButton($from_id, $msg_id, $reply_to): array
{
    $deeplink = base64url_encode($from_id . "_" . $msg_id . "_q-ostad");
    $deeplink2 = base64url_encode($from_id . "_" . $msg_id . "_q-report");
    return [
        [
            sendMessageSingleButton($deeplink),
        ],
        [
            reportOstadShenasiSingleButton($deeplink2)
        ],
        [
            adminViewIdSingleButton($from_id),
            confirmSingleButton("ostadOK", $reply_to),
        ],
    ];
}

function reportOstadShenasiSingleButton($url): array
{
    return array('text' => "گزارش خطا", 'url' => "https://t.me/" . BOT_ID . "?start=" . $url);
}
