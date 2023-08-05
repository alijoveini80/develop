<?php

function updateButtonTextToSent(array $rows): array
{
    return updateButtonText($rows, "تایید", "تایید (ارسال شد!)");
}
