<?php

$billednavne = array ( "billede_1.jpg", "billede_2.jpg", "billede_3.jpg", "billede_4.jpg", "billede_1.jpg", "billede_2.jpg", "billede_3.jpg", "billede_4.jpg" );

$antalbilleder = count( $billednavne );

$billednummer = 0;

echo '<div class="galleri">';

while( $billednummer < $antalbilleder )
{
    echo '<img src="' . $billednavne[$billednummer] . '" >';
    $billednummer++;
}

echo '</div>'

?>