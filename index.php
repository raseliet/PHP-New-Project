<?php

$pirma_lentyna = [
    [
        'pieno_produktai' => [
            'pavadinimas' => 'pienas',
            'kiekis' => 1,
            'pozicija_lentynoje' => 'pirmas',
        ],
        [
            'pavadinimas' => 'kefyras',
            'kiekis' => 0,
            'pozicija_lentynoje' => 'antras',
        ],
    ],
    [
        'padazai' => [
            'pavadinimas' => 'ketčupas',
            'kiekis' => 1,
            'pozicija_lentynoje' => 'ketvirtas',
        ],
    ],
    [
        'alkoholiniai_gerimai' => [
            'pavadinimas' => 'degtinė',
            'kiekis' => 2,
            'pozicija_lentynoje' => 'trečias',
        ],
    ],
];
$antra_lentyna = [
    [
        'pieno_produktai' => [
            'pavadinimas' => 'grietinė',
            'kiekis' => 1,
            'pozicija_lentynoje' => 'antras',
        ],
        [
            'pavadinimas' => 'jogurtas',
            'kiekis' => 2,
            'pozicija_lentynoje' => 'trečias',
        ],
    ],
    [
        'zuvies_produktai' => [
            'pavadinimas' => 'žuvis',
            'kiekis' => 0,
            'pozicija_lentynoje' => 'ketvirtas',
        ],
    ],
    [
        'kiti_produktai' => [
            'pavadinimas' => 'kiaušiniai',
            'kiekis' => 3,
            'pozicija_lentynoje' => 'pirmas',
        ],
    ],
];

var_dump($pirma_lentyna, $antra_lentyna);
