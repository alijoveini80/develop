<?php

function newStudentGradeButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => "دکتری"], ['text' => "کارشناسی ارشد"], ['text' => "کارشناسی"],
            ],
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}