<?php

function signature(): array
{
    $umzmedia =  "\n\n" . sendemoji('\xF0\x9F\x93\xAE') . " <a href='http://t.me/UmzMedia'>رسانه دانشگاه مازندران</a> \n";
    $umzmedia .= sendemoji('\xF0\x9F\xA4\x96') . " <a href='http://t.me/UmzMediaBot'>ارسال پیام</a> | ";
    $umzmedia .= sendemoji('\xF0\x9F\x91\xA5') . " <a href='http://t.me/AloUmz'>پشتیبانی</a>";

    $umziha = "\n\n" . sendemoji('\xF0\x9F\x93\xAE') . " <a href='http://t.me/UmziHa'>کانال دانشجویی دانشگاه مازندران</a> \n";
    $umziha .= sendemoji('\xF0\x9F\xA4\x96') . " <a href='http://t.me/UmzMediaBot'>ارسال پیام</a> | ";
    $umziha .= sendemoji('\xF0\x9F\x91\xA5') . " <a href='http://t.me/AloUmz'>پشتیبانی</a>";

    $umzfood = "\n\n" . sendemoji('\xF0\x9F\x93\xAE') . " <a href='http://t.me/UmzFood'>کانال دانشجویی سلف دانشگاه مازندران</a> \n";
    $umzfood .= sendemoji('\xF0\x9F\xA4\x96') . " <a href='http://t.me/UmzMediaBot'>ارسال پیام</a> | ";
    $umzfood .= sendemoji('\xF0\x9F\x91\xA5') . " <a href='http://t.me/AloUmz'>پشتیبانی</a> \n";
    $umzfood .= sendemoji('\xE2\x9C\x85') . " <a href='http://t.me/UmzMedia'>رسانه دانشگاه مازندران</a> | <a href='http://t.me/UmziHa'>UmziHa</a>";

    return [
        "umzmedia" => [
            "text" => $umzmedia,
        ],
        "umziha" => [
            "text" => $umziha,
        ],
        "umzfood" => [
            "text" => $umzfood,
        ],
    ];
}
