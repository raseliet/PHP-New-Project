<?php




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
            'error' => ''
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
            'error' => ''
        ],
        'wish' => [
            'attr' => [
                'type' => 'select',
                'value' => 'car'
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

function get_form_input($form) {
    $filter_parameters = [];

    foreach ($form['fields'] as $field_id => $field) {
        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $filter_parameters);
}


function validate_not_empty($field_input, &$field) {
    
    if ($field_input === ''){
        $field['error'] = 'Laukas negali būti tuščias!';
    }
}

$filtered_input = get_form_input($form);

foreach ($form['fields'] as $field_id => &$field) {
    $field_input = $filtered_input[$field_id];
    $field['attr']['value'] = $field_input;
    validate_not_empty($field_input, $field);

    unset($field);
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Security</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
<?php require 'templates/form.tpl.php'; ?>
    </body>
</html>

