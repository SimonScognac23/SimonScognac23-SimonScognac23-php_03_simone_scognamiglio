<?php
$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];




// Creazione di variabili per le parole mancanti
$word1 = 'Nel';
$word2 = 'di cammin di nostra vita';
$word3 = 'una selva';
$word4 = 'smarrita';





// Estrazione e concatenazione degli elementi necessari
$results = $word1 . ' ' .                // "Nel"
           $words1[6][3][0] . ' ' .      // "mezzo"
           $word2 . ' ' .                // "di cammin di nostra vita"
           $words1[4] . ' ' .           // "mi"
           $words1[6][4] . ' ' .         // "ritrovai"
           $words1[6][5] . ' ' .         // "per"
           $word3 . ' ' .                // "una selva"
           $words1[6][0] . ', che\' la ' . // "oscura"
           $words1[7] . ' via ' .        // "diritta"
           $words1[6][1] . ' ' .         // "era"
           $word4;                       // "smarrita"




           
// Stampa del risultato
echo $results;
?>
