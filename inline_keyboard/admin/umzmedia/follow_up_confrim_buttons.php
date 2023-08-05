<?php

function followUpConfirmButton($pid): array
{
    return [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("followup"),
        ],
    ];
}
