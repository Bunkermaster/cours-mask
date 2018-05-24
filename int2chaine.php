<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/05/2018
 * Time: 10:18
 */
$monInt = 162792771;
echo pad(decbin($monInt)).PHP_EOL;
$output = '';
for ($i = 3; $i >= 0; $i--) {
    $output .= chr(decbin(($monInt >> ($i * 8) & 255)));
}
echo $output.PHP_EOL;
function pad($pad)
{
    return  str_pad($pad,32, '0', STR_PAD_LEFT);
}
