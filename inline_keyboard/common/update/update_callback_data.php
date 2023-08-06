<?php

function updateCallbackDataText(array $rows, $search, $replace): array
{
    $buttons = [];
    foreach ($rows as $row) {
        $row_buttons = [];
        foreach ($row as $element) {
            if (array_key_exists("callback_data", $element)) {
                if ($element["callback_data"] == $search) {
                    $element["callback_data"] = $replace;
                }
            }
            array_push($row_buttons, $element);
        }
        array_push($buttons, $row_buttons);
    }
    return $buttons;
}
