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
                    'placeholder' => 'Enter Name',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'validate' => [
                'validate_not_empty'
            ],
            'label' => 'Vardas:'
        ],
        'last_name' => [
            'attr' => [
                'type' => 'text'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Surname',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
            'validate' => [
                'validate_not_empty'
            ],
            'label' => 'Pavardė:'
        ],
        'age' => [
            'attr' => [
                'type' => 'text'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter Age',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
            'validate' => [
                'validate_not_empty',
                'validate_is_number',
                'validate_is_positive',
                'validate_max_100'
            ],
            'label' => 'Metai:'
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

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias!';
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input) && !empty($field_input)) {
        $field['error'] = 'Įveskite skaičių!';
    } else {
        return true;
    }
}

function validate_max_100($field_input, &$field) {
    if ($field_input > 100) {
        $field['error'] = 'Per daug metų!';
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Įveskite teigiamą skaičių!';
    } else {
        return true;
    }
}

function get_form_input($form) {
    $filter_parameters = [];

    foreach ($form['fields'] as $field_id => $field) {
        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $filter_parameters);
}

function validate_form(&$form) {
    $filtered_input = get_form_input($form);
    foreach ($form['fields'] as $field_id => &$field) {
        $field_input = $filtered_input[$field_id];
        $field['attr']['value'] = $field_input;
        foreach ($field['validate'] ?? [] as $validator_id => $validator) {
            $validator($filtered_input[$field_id], $field);
        }
    }
}

validate_form($form);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
<?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
