<?php
// Snack 1
    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
    ];

    for ($i; $i < count($matches); $i++) {
        echo $matches[$i]['team1']." - ".$matches[$i]['team2']." - ".$matches[$i]['point_team_1']." - ".$matches[$i]['point_team_2']."<br>";
    }

    // Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (
        strlen($name) > 3 && 
        (strpos($mail, ".") !==false && strpos($mail, '@') !== false) &&
        is_numeric($age)
        )
        {
        echo "Accesso riuscito <br>";
    } else {
        echo "Accesso negato <br>";
    }
    ;
    
// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta


$randomNumbers = array();//creo l'array dei numeri
for($i = 0; $i < 15; $i++){//inizio un ciclo da ripetere 7 volte
$controllo = true;//creo una variabile di controllo
while($controllo){//ripeto l'azione fino a qaundo controllo non diventa false
$numRandom = rand(0,15);
if(!in_array($numRandom, $randomNumbers)){//controllo che il numero non sia già presente
$randomNumbers[] = $numRandom ;//aggiungo il numero all'array
$controllo = false;//interrompo il ciclo
}//fine if
}//fine ciclo while
}//fine ciclo for
print_r($randomNumbers);


?>