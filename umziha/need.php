<?php

function needHelp($id = null, $matn = null, $esm = null): array
{
    $post = " #نیازدانشجو (#ref_" . $id . ")\n\n";
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
        "get_description" => [
            "fa" => " دنبال چی میگردی ؟ اگر به چیزی نیاز داری ( مثل شماره استاد یا هرچیزی دیگه ای .. ) اینجا ارسال کن ..",
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
