<?php

require 'inline_keyboard/inline_keyboard.php';
require 'inline_keyboard/common/update_button_text.php';
require 'inline_keyboard/common/update_button_text_to_sent.php';
require 'inline_keyboard/common/delete_buttons.php';
require 'base64url.php';
require 'config.php';

// $test = chartConfirmButton(6323020);
// $test = chatsGroupConfirmButton(false, 6323020, "","","https://t.me/ali80");
// $test = copyClickedButton(array(array('text' => "ali", 'callback_data' => "data")));
// $test = eventConfirmButton(false, 6323020);
// $test = foundLostButton(false, 6323020, 6323020, 100001, "https://t.me/ali80");
// $test = groupsConfirmButton(false, 6323020, 6323020, 100001, "https://t.me/ali80");
// $test = newStudentGroupsConfirmButton(false, 6323020, 6323020, 100001, "https://t.me/ali80");
// $test = ostadShenasiQuestionConfirmButton(6323020, 100, 1972001);

$rows = [
    [
        [
            "text" => "پاسخ ارسال شده",
            "callback_data" => "6323020_100_read-answer_100"
        ],
        [
            "text" => "ارسال پاسخ",
            "url" => "https=>//t.me/umzmediabot?start=NjMyMzAyMF8xMDBfcS1vc3RhZA"
        ],

    ],
    [
        [
            "text" => "گزارش خطا",
            "url" => "https=>//t.me/umzmediabot?start=NjMyMzAyMF8xMDBfcS1yZXBvcnQ"
        ]
    ],
    [
        [
            "text" => 6323020,
            "callback_data" => "view-id-6323020"
        ],
        [
            "text" => "تایید",
            "callback_data" => "ostadOK-1972001-000"
        ]
    ]
];

// $test = ostadShenasiConfirmFeedbackButton($rows, 1972001);
// print_r($test);

// $test = updateButtonText($rows, "تایید", "----------");
// print_r($test);
// $test = updateButtonTextToSent($rows);
// print_r($test);

$test = deleteButtons($rows, array("تایید"));
print_r($test);
