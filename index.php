<?php

var_dump($_POST);


$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Kalėdų norai',
    'fields' => [
        'first_name' => [
            'attr' => [
                'type' => 'text'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Aurimas',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'label' => 'Vardas:',
            'error' => 'Vardas per trumpas!'
        ],
        'last_name' => [
            'attr' => [
                'type' => 'text'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Stecenka',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
            'label' => 'Pavardė:',
            'error' => 'Paliktas tuščias laukas!'
        ],
        'wish' => [
            'attr' => [
                'type' => 'select',
                'value' => 'tv'
            ],
            'extra' => [
                'attr' => [
                    'class' => 'input-select',
                    'id' => 'wish'
                ]
            ],
            'options' => [
                'car' => 'BMW',
                'tv' => 'Teliko',
                'socks' => 'Kojinių'
            ],
            'label' => 'Kalėdom noriu:',
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Siųsti'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'Išvalyti'
        ]
    ],
    'message' => 'Formos Message!'
];

/**
 * Generates HTML attributes
 * @param array $attr
 * @return string
 */
function html_attr($attr) {
    $html_attr_array = [];

    foreach ($attr as $attribute_key => $attribute_value) {
        $html_attr_array[] = strtr('@key="@value"', [
            '@key' => $attribute_key,
            '@value' => $attribute_value
        ]);
    }

    return implode(' ', $html_attr_array);
}

function get_filtered_input($field_indexes) {

//    $field_indexes = ['first_name', 'last_name', 'wish'];
    $filter_parameters = [];

    foreach ($field_indexes as $value) {
        $filter_parameters[$value] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $filter_parameters);
}

$filtered_input = get_filtered_input(['first_name', 'last_name', 'wish']);
var_dump($filtered_input);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <h1><?php print $_POST['first_name'] ?? ''; ?></h1>
        <h2><?php print $_POST['wish'] ?? ''; ?></h2>
        <?php require 'templates/form.tpl.php'; ?>


    </body>
</html>
