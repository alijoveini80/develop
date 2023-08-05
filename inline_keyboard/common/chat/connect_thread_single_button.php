<?php

function connectThreadButton($thread_id): array
{
    return callbackDataSingleButton("پاسخ", "openthread_" . $thread_id);
}
