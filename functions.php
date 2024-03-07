<?php
$passwordLenght = $_GET['passwordLenght'];

function passwordGenerator($num)
{
    for ($i = 0; $i < $num; $i++) {
        $randomAscii = rand(48, 122);
        echo chr($randomAscii);
    }
}
