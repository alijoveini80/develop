<?php

function sendemoji($EmojiUtf8Byte)
{
    $pattern = '@\\\x([0-9a-fA-F]{2})@x';
    $emoji = preg_replace_callback($pattern, function ($captures) {
        return chr(hexdec($captures[1]));
    }, $EmojiUtf8Byte);
    return $emoji;
}