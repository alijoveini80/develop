<?php

function adminViewIdButton($pid)
{
    return json_encode([
        'inline_keyboard' => [
            [
                ['text' => "گزارش خطا | مشاهده فرستنده", 'callback_data' => "view-id-" . $pid],
            ],
        ],
    ]);
}
