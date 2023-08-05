<?php

function adminViewIdButton($pid): array
{
    return [
        [
            adminViewIdSingleButton($pid)
        ],
    ];
}

function adminViewIdSingleButton($pid): array
{
    return array('text' => $pid, 'callback_data' => "view-id-" . $pid);
}
