<?php

function deleteAdminSideButtons(array $rows): array
{
    return deleteMultiButtons($rows, array("تایید", "مشاهده پیوی"));
}
