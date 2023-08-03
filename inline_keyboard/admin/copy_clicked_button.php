<?php

function copyClickedButton(array $rows)
{
    return json_encode([
        'inline_keyboard' => $rows,
    ]);
}
