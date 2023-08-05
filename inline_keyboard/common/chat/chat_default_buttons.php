<?php

function chatDefaultButton($thread_id): array
{
    return [
        [
            banThreadButton($thread_id),
            connectThreadButton($thread_id),
        ],
    ];
}
