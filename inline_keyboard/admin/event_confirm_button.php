<?php

function eventConfirmButton($pid): array
{
    return [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("event"),
        ],
    ];
}
