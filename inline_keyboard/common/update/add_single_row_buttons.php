<?php

function addSingleRowButton(array $rows, array $add): array
{
    array_push($rows, $add);
    return $rows;
}
