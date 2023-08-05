<?php

function banMenuButton($thread_id): array
{
    return [
        [
            callbackDataSingleButton("خیر", "backto_openthread_" . $thread_id),
            callbackDataSingleButton("بله", "banfrom_thread_" . $thread_id),
        ]
    ];
}
