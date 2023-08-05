<?php

function chartConfirmButton($pid): array
{
    return [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("chart"),
        ],
    ];
}
