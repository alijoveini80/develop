<?php

function deleteButtons(array $rows, array $buttons_text)
{
    $buttons = [];
    foreach ($rows as $row) {
        $row_buttons = [];
        $column_buttons = [];
        foreach ($row as $element) {
            if (array_key_exists("text", $element)) {
                foreach ($buttons_text as $index) {
                    if ($element["text"] == $index) {
                        break;
                    }
                    array_push($column_buttons, $element);
                }
            }
            array_push($row_buttons, $column_buttons);
        }
        array_push($buttons, $row_buttons);
    }
    return json_encode([
        'inline_keyboard' => $buttons
    ]);
}
