<?php 


// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$matches = [

    [
        'host' => 'Brindisi',
        'hostScore' => 89,
        'guest' => 'Bologna',
        'guestScore' => 87,
    ],
    [
        'host' => 'Treviso',
        'hostScore' => 79,
        'guest' => 'Roma',
        'guestScore' => 97,
    ],
    [
        'host' => 'Torino',
        'hostScore' => 89,
        'guest' => 'Milano',
        'guestScore' => 67,
    ],

];

for( $i=0; $i<count($matches); $i++ ){
    echo $matches[$i]['host'] . '-' . $matches[$i]['guest'] . '//' . $matches[$i]['hostScore'] . '-' . $matches[$i]['guestScore'] . '<br>';
}

?>