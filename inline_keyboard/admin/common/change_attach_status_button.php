<?php

function AttachStatusSingleButton($id): array
{
    return callbackDataSingleButton("حذف پیوست", "hide-" . $id);
}

function updateButtonToVisibleAttach($id): array
{
    return callbackDataSingleButton("اضافه کردن پیوست", " visible-" . $id);
}
