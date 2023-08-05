<?php

function checkJoinToSponsorChannelButton($index): array
{
    return [
        [
            callbackDataSingleButton("عضو شدم!", "get-status" . $index)
        ],
    ];
}
