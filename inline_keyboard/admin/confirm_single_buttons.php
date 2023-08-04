<?php

function confirmSingleButton(bool $is_confirmed, $category, $reply_to = "", $ref = ""): array
{
    $is_confirmed_text = "";
    if($is_confirmed){
        $is_confirmed_text = "تایید (ارسال شد!)";
    } else {
        $is_confirmed_text = "تایید";
    }
    if (empty($reply_to)) {
        $reply_to = "000";
    }
    if (empty($ref)) {
        $ref = "000";
    }
    return array(
        'text' => $is_confirmed_text,
        'callback_data' => $category . "-" . $reply_to . "-" . $ref
    );
}

// function confirmFeedbackSingleButton($callback): array
// {
//     return array(
//         'text' => "تایید (ارسال شد!)", 'callback_data' => $callback,
//     );
// }
