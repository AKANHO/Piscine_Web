<?php
function is_negative($nb)
{
if ((int) $nb !== $nb)
{
    echo"Le parametre n'est pas un Int\n";
}
else 
{
    if ( $nb < 0 )
    {
        echo "True\n";
    }
    else 
{
    echo "False\n";
}
}
}

