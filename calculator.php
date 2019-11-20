<?php


$calculator = readline ("HMm yes, hello. I am the calculator, what do you want to do");
if ($calculator != "+" || "-" || "%");
else {
    echo ("Hmm. I can't work with that, tell me what you want to do or get lost.");}
$input1 = readline ("Which number do you want to start off with ");
if (is_numeric($input1));
else {
    echo ("Cut the crap will ya, can't work with that. Have some decensy or get lost.");}
$input2 = readline ("Which number would you like to use next? ");
if (is_numeric($input2));
else {
    echo ("You are really starting to get on my nerves. Pull your shit together, c'mon.");}


        if ($calculator == "+")
    echo ($input1 + $input2);

         if ($calculator == "-")
    echo ($input1 - $input2);

         if ($calculator == "%")
    echo ($input1 % $input2);

    else {
        echo ("... I think? no, i am sure of it. This is the correct awnser.");}