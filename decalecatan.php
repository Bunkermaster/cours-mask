<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/05/2018
 * Time: 09:57
 */

$a = 128;
$b = 12;
$c = 45;
$d = 0;

$result = $a;
$result = ($result << 8) + $b;
$result = ($result << 8) + $c;
$result = ($result << 8) + $d;
//echo $result;
$output = $result >> 16;
echo $output & 255;
