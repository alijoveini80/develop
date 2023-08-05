<?php

function banThreadButton($thread_id): array
{
    return callbackDataSingleButton("بن", "banmenu_" . $thread_id);
}
