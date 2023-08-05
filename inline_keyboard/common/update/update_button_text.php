<?php

function updateButtonText(array $rows, $search, $replace)
{
    $buttons = [];
    foreach ($rows as $row) {
        $row_buttons = [];
        foreach ($row as $element) {
            if (array_key_exists("text", $element)) {
                if ($element["text"] == $search) {
                    $element["text"] = $replace;
                }
            }
            array_push($row_buttons, $element);
        }
        array_push($buttons, $row_buttons);
    }
    return $buttons;
}