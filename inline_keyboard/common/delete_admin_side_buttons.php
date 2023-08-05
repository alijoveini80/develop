<?php

function deleteAdminSideButtons(array $rows, array $keywords)
{
    foreach ($keywords as $key) {
        $rows = deleteButton($rows, $key);
    }
    return $rows;
}
