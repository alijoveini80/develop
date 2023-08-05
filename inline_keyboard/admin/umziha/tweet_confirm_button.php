<?php

function tweetConfirmButton($pid): array
{
    return [
        [
            adminViewIdSingleButton($pid),
            confirmSingleButton("tweet"),
        ],
    ];
}
