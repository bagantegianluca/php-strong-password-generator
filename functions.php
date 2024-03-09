<?php
$passwordLength = $_GET['passwordLength'];


/**
 * @param Number Password chars length
 */
function passwordGenerator($num)
{
    $password = '';
    for ($i = 0; $i < $num; $i++) {
        $randomAscii = rand(48, 122);
        $password .= chr($randomAscii);
    }
    return $password;
}
