<?php

function umzFoodButton()
{
    return json_encode([
        'keyboard' => [
            [
                ['text' => sendemoji('\xE2\x9D\x8C') . " غذا میخوام (میخرم)"], ['text' => sendemoji('\xE2\x9C\x85') . " غذا دارم (میفروشم)"],
            ],
            [
                ['text' => "لغو"],
            ],
        ], 'resize_keyboard' => true,
    ]);
}
