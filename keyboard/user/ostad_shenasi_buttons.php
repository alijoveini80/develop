<?php

function ostadShenasiMainMenuButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => sendemoji('\xF0\x9F\x94\xBA') . " معرفی استاد"],
            ],
            [
                ['text' => sendemoji('\xF0\x9F\x94\xBA') . " سوال در مورد استاد"], ['text' => sendemoji('\xF0\x9F\x94\xBA') . " بهترین استاد"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}

function ostadShenasiStartButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "شروع"],
            ],
            [
                ['text' => "بازگشت به منوی اصلی"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}

function ostadShenasiCollegeButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "فنی مهندسی و علوم دریایی"],
            ],
            [
                ['text' => "هنر و معماری"], ['text' => "علوم پایه"],
            ],
            [
                ['text' => "شیمی"], ['text' => "فیزیک"],
            ],
            [
                ['text' => "علوم اقتصاد و اداری"], ['text' => "حقوق و علوم سیاسی"],
            ],
            [
                ['text' => "علوم انسانی و اجتماعی"], ['text' => "علوم ریاضی"],
            ],
            [
                ['text' => "فقه و الهیات"], ['text' => "تربیت بدنی"],
            ],
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}

function ostadShenasiGroupButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "تخصصی"], ['text' => "عمومی"],
            ],
            [
                ['text' => "علوم پایه"], ['text' => "معارف"],
            ],
            [
                ['text' => "کارگاه"], ['text' => "آزمایشگاه"],
            ],
            [
                ['text' => "تربیت بدنی"],
            ],
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
