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
    return callbackDataSingleButton("مشاهده پیوی", "view-id-" . $pid);
}
