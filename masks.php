<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 24/05/2018
 * Time: 09:31
 */

use const Ingredients\{
    APP_INGREDIENT_CAROTTE,
    APP_INGREDIENT_BISCOTTE,
    APP_INGREDIENT_BEURRE
};

require_once "const.php";
/**
 * 000000000
 * 010000000
 * 001000000
 * 011000000
 */
checkParams(APP_INGREDIENT_CAROTTE | APP_INGREDIENT_BEURRE);

function checkParams(int $param)
{
    if (($param & APP_INGREDIENT_BEURRE) == APP_INGREDIENT_BEURRE) {
        echo "Y'a du beurre".PHP_EOL;
    }
    if (($param & APP_INGREDIENT_CAROTTE) == APP_INGREDIENT_CAROTTE) {
        echo "Y'a du carotte".PHP_EOL;
    }
    if (($param & APP_INGREDIENT_BISCOTTE) == APP_INGREDIENT_BISCOTTE) {
        echo "Y'a du biscotte".PHP_EOL;
    }
}