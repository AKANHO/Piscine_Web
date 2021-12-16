<?php
function is_negative_ternary($nb)
{
$name =((int) $nb !== $nb)? "Le parametre n'est pas un Int\n" : (( $nb <0 ) ?"True\n" : "False\n");
echo $name;
}
