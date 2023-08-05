<?php

function unbanButton($thread_id): array
{
    return [
        [
            callbackDataSingleButton("آنبلاک", "unbanfrom_thread_" . $thread_id),
        ]
    ];
}
