<?php
session_start();
header("Content-type: image/webp");

$num1 = rand(1, 9);
$num2 = rand(1, 9);
$opPicker  = rand(0, 1);
$operator = array('+', 'x');

$ans;
$algo;

switch ($operator[$opPicker]) {
    case '+':
        $ans = $num1 + $num2;
        $algo = "$num1 + $num2 =";
        break;

    case 'x':
        $ans = $num1 * $num2;
        $algo = "$num1 x $num2 =";
    default:
        $ans = $num1 * $num2;
        $algo = "$num1 x $num2 =";
        break;
}

$_SESSION['captcha'] = $ans;

$layer = imagecreatetruecolor(90, 30);
$bg = imagecolorallocate($layer, 255, 255, 255);
imagefill($layer, 0, 0, $bg);
$textcolor = imagecolorallocate($layer, 0, 0, 0);

imagestring($layer, 5, 5, 5, $algo, $textcolor);

imagewebp($layer);
