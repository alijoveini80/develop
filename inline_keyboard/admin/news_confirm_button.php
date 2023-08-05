<?php

function newsConfirmButton($pid): array
{
    return [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("news"),
        ],
    ];
}
