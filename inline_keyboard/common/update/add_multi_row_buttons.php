<?php

function addMultiRowButton(array $rows, array $multi_add): array
{
    foreach ($multi_add as $new_row) {
        $rows = addSingleRowButton($rows, $new_row);
    }
    return $rows;
}
