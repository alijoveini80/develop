<?php

function deleteMultiButtons(array $rows, array $keywords): array
{
    foreach ($keywords as $key) {
        $rows = deleteButton($rows, $key);
    }
    return $rows;
}
