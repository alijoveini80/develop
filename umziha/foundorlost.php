<?php

function foundOrLostHelp($id = null, $foundOrLost = null, $matn = null, $esm = null): array
{
    $post = "";
    if ($foundOrLost == 0) {
        $post .= sendemoji('\xF0\x9F\x94\xBA') . " #گم_شده (#ref_" . $id . ")\n\n";
    }
    if ($foundOrLost == 1) {
        $post .= sendemoji('\xF0\x9F\x94\xBA') . " #پیدا_شده (#ref_" . $id . ")\n\n";
    }
    $post .= $matn . "\n\n";
    $post .= sendemoji('\xF0\x9F\x91\xA4') . " " . $esm . "\n\n";
    $post .= sendemoji('\xF0\x9F\x93\xA4') . " پاسخ این پیام به طور خودکار برای فرستنده از طریق ربات ارسال خواهد شد \n\n";


    $finish = sendemoji('\xF0\x9F\x86\x97');
    $finish .= sendemoji('\xE2\x8F\xB0') . " تا چند دقیقه دیگه پیامت داخل کانال قرار میگیره \n\n";
    $finish .= " پیامت رو دریافت کردیم \n\n";
    $finish .= sendemoji('\xE2\x80\xBC') . " جواب پیامت از طریق ربات برات ارسال میشه , پس مراقب باش ربات رو Stop یا Delete نکنی \n\n";
    $finish .= sendemoji('\xE2\x98\x91') . " منتظر پیام های بعدیت هستیم ! \n\n";
    $finish .= "@UmziHa | کانال دانشجویی دانشگاه مازندران";

    return [
        "get_foundorlost" => [
            "fa" => sendemoji('\xF0\x9F\x94\xBA') . " اول بهمون بگو چیزی رو گم کردی یا پیدا کردی ؟",
        ],
        "get_description" => [
            "fa" => sendemoji('\xF0\x9F\x94\xBA') . " یه توضیح مختصر بده ..",
        ],
        "get_attach" => [
            "fa" => " اگه میخای فایلی رو پیوست کنی، بفرست برام. در غیر اینصورت از دکمه کیبورد گزینه پیوستی ندارم رو انتخاب کن!",
        ],
        "finish" => [
            "fa" => $finish,
        ],
        "need_post" => [
            "fa" => $post,
        ],
    ];
}
