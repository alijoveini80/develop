<?php

require 'umziha/need.php';
require 'umziha/question.php';
require 'umziha/foundorlost.php';
require 'common_messages/common_messages.php';
require 'keyboard/keyboard.php';
require 'signature.php';
require 'base64url.php';
require 'sendemoji.php';


/* ----------- need -----------------------------*/
print_r(needHelp()["get_description"]);
echo "<br>";
print_r(needHelp()["get_attach"]);
echo "<br>";
print_r(needHelp()["finish"]);
echo "<br>";
print_r(needHelp(10001, "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "Ali")["need_post"]);
echo "<br>";
print_r(needHelp()["text_msg"]);
echo "<br>";
/* ----------- question -----------------------------*/
print_r(questionHelp()["get_description"]);
echo "<br>";
print_r(questionHelp()["get_attach"]);
echo "<br>";
print_r(questionHelp()["finish"]);
echo "<br>";
print_r(questionHelp(10001, "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "Ali")["need_post"]);
echo "<br>";
print_r(errorMessage()["text_msg"]);
echo "<br>";
/* ----------- foundOrLost -----------------------------*/
print_r(foundOrLostHelp()["get_foundorlost"]);
echo "<br>";
print_r(foundOrLostHelp()["get_description"]);
echo "<br>";
print_r(foundOrLostHelp()["get_attach"]);
echo "<br>";
print_r(foundOrLostHelp()["finish"]);
echo "<br>";
print_r(foundOrLostHelp(10001, 1, "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "Ali")["need_post"]);
echo "<br>";
print_r(foundOrLostHelp()["error_keyboard"]);
echo "<br>";
/* ----------- Signature -----------------------------*/
print_r(signature()["umzmedia"]);
echo "<br>";
print_r(signature()["umziha"]);
echo "<br>";
print_r(signature()["umzfood"]);
echo "<br>";
