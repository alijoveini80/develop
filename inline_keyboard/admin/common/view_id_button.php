<?php

function ViewIdButton($pid): array
{
    return [
        [
            ViewIdSingleButton($pid)
        ],
    ];
}

function ViewIdSingleButton($pid): array
{
    return callbackDataSingleButton("مشاهده پیوی", "view-id-" . $pid);
}
