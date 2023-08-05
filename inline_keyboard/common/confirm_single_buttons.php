<?php

function confirmSingleButton($category, $reply_to = "", $ref = ""): array
{
    if (empty($reply_to)) {
        $reply_to = "000";
    }
    if (empty($ref)) {
        $ref = "000";
    }
    return callbackDataSingleButton("تایید", $category . "-" . $reply_to . "-" . $ref);
}
