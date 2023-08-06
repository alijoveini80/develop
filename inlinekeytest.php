<?php

// require 'inline_keyboard/inline_keyboard.php';
// require 'inline_keyboard/common/update_button_text.php';
// require 'inline_keyboard/common/update_button_text_to_sent.php';
// require 'inline_keyboard/common/delete_button.php';
// require 'inline_keyboard/common/delete_admin_side_buttons.php';
// require 'inline_keyboard/common/send_inline_reply_markup.php';
require 'inline_keyboard/common/update/add_single_row_buttons.php';
require 'inline_keyboard/common/update/add_multi_row_buttons.php';
require 'inline_keyboard/common/confirm_single_buttons.php';
require 'inline_keyboard/common/callback_data_single_button.php';
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

// $test = deleteButton($rows, "تایید");
// print_r($test);
// $test = deleteButton($rows, "پاسخ ارسال شده");
// print_r($test);
// $test = deleteAdminSideButtons($rows, array("تایید", "پاسخ ارسال شده"));
// print_r($test);

// $test = addSingleRowButton($rows, array(
//     confirmSingleButton("chart"),
//     confirmSingleButton("aaaaaaa"),
// ));
// print_r(json_encode($test));
$test = addMultiRowButton($rows, array(
    array(
        confirmSingleButton("chart"),
        confirmSingleButton("aaaaaaa"),
    ),
    array(
        confirmSingleButton("bbbbbbb"),
        confirmSingleButton("ccccccc"),
    )
));
print_r(json_encode($test));
