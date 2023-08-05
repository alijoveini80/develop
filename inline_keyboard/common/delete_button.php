<?php

function deleteButton(array $rows, $button_text)
{
    $buttons = [];
    foreach ($rows as $row) {
        $row_buttons = [];
        foreach ($row as $element) {
            if (array_key_exists("text", $element)) {
                if ($element["text"] == $button_text) {
                    continue;
                }
            }
            array_push($row_buttons, $element);
        }
        array_push($buttons, $row_buttons);
    }
    return $buttons;
}
