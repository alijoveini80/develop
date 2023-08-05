<?php

function sendMessageSingleButton($url, $start = "start"): array
{
    return array(
        'text' => "ارسال پاسخ", 'url' => "https://t.me/" . BOT_ID . "?" . $start . "=" . $url
    );
}
