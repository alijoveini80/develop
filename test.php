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
// print_r(needHelp()["get_description"]);
// echo "\n";
// print_r(needHelp()["get_attach"]);
// echo "\n";
// print_r(needHelp()["finish"]);
// echo "\n";
// print_r(needHelp(10001, "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "Ali")["need_post"]);
// echo "\n";
// print_r(needHelp()["text_msg"]);
// echo "\n";
/* ----------- question -----------------------------*/
// print_r(questionHelp()["get_description"]);
// echo "\n";
// print_r(questionHelp()["get_attach"]);
// echo "\n";
// print_r(questionHelp()["finish"]);
// echo "\n";
// print_r(questionHelp(10001, "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "Ali")["need_post"]);
// echo "\n";
// print_r(errorMessage()["text_msg"]);
// echo "\n";
/* ----------- foundOrLost -----------------------------*/
// print_r(foundOrLostHelp()["get_foundorlost"]);
// echo "\n";
// print_r(foundOrLostHelp()["get_description"]);
// echo "\n";
// print_r(foundOrLostHelp()["get_attach"]);
// echo "\n";
// print_r(foundOrLostHelp()["finish"]);
// echo "\n";
// print_r(foundOrLostHelp(10001, 1, "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "Ali")["need_post"]);
// echo "\n";
// print_r(foundOrLostHelp()["error_keyboard"]);
// echo "\n";
/* ----------- Signature -----------------------------*/
// print_r(signature()["umzmedia"]);
// echo "\n";
// print_r(signature()["umziha"]);
// echo "\n";
// print_r(signature()["umzfood"]);
// echo "\n";

/* ----------- common message -----------------------------*/
print_r(attachMessage()["get_attach"]["fa"]);
echo "\n";
print_r(errorMessage()["keyboard"]["fa"]);
echo "\n";
print_r(errorMessage()["text_msg"]["fa"]);
echo "\n";
