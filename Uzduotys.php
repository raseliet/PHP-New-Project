<?php

//$array = [
//    't' => [
//        'b' => [
//            'a' => ''
//        ]
//    ]
//];
//
////print $array['t'], ['b'], ['a'];
////'my value'
//
//$form = [
//    'fields' => [
//        'password' => [
//            'error' => ''
//        ]
//    ]
//];
//
////$form ['fields']['password']['error'];
////'field is emty'
//
//$form = [
//    'fields' => [
//        'password' => [
//            'error' => '',
//            'label' => 'Password:'
//        ]
//    ]
//];
//
////print $form ['fields']['password']['label'];
//
//
////foreach ($form['fields'] as $field_id => $field) {
//////    print $field['name']; //pass
////}
////
////$form = [
////    'fields' => [
////        'password' => [
////            'error' => '',
////            'label' => 'Password:',
////            'name' => ''
////        ]
////    ]
////];
//Uzduotis
//Turim


$receptai = [];

$ingredients = [
    'obuolys',
    'miltai',
    'cukrus',
    'pienas'
];
//Reikia
//$receptai = [
//    'pyragas' => [
//        'obuolys',
//        'miltai',
//        'cukrus',
//        'pienas'
//    ]
//];


foreach ($ingredients as $ingredient) {

    $receptai['pyragas'][] = $ingredient;
}

unset[$receptai]['pyragas']['0'];
var_dump($receptai)