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


// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$paragraph = " Quisque vel leo quis urna lobortis laoreet. Mauris aliquam nulla dui, vitae aliquam magna sagittis vitae. Curabitur eu efficitur sem, eget rutrum sapien. Fusce venenatis dapibus ultrices. Nunc aliquet eu arcu nec interdum. Curabitur blandit pretium tortor, ac blandit magna convallis quis. Sed eget massa bibendum quam consectetur accumsan. Etiam ullamcorper mattis auctor. Aenean blandit tempor enim. Pellentesque ligula risus, commodo nec condimentum ac, vulputate ac mi. Phasellus ipsum justo, convallis sed aliquam vitae, rhoncus ac dolor. Donec laoreet nibh nec eros cursus, eu pulvinar dolor dignissim. Vivamus pulvinar, justo eget maximus varius, dolor diam cursus sem, sit amet placerat magna lorem at eros.";

$partsParagraph = explode('.', $paragraph);
print_r($partsParagraph);

// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
// Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// foreach ($posts as $key => $value) {
//     echo "<br>Data = $key\n"; {
//         foreach ($value as $chiave => $valore[$valore]) {
//             echo "<li>$chiave = $valore</li>";
//         }
//     }
// }

foreach ($posts as $data => $value) {
    echo "<br>Data : $data\n"; {
        foreach ($value as $key => $valore) {
            // echo "<li>$key: $valore</li>"; 
            {
                foreach ($valore as $chiave => $prova) {
                    echo "<li>$prova</li>";
                }
            }
        }
    }
}

?>