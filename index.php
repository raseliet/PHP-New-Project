<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'X + Y',
    'fields' => [
        'pirmas' => [
            'type' => 'number',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter number',
                    'class' => 'input-text',
                    'id' => 'pirmas'
                ]
            ],
            'validators' => [
                'validate_not_empty'
            ],
            'label' => 'X:'
        ],
        'antras' => [
            'type' => 'number',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter number',
                    'class' => 'input-text',
                    'id' => 'antras'
                ]
            ],
            'validators' => [
                'validate_not_empty'
            ],
            'label' => 'Y:'
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Suma'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'Išvalyti'
        ]
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ],
];

var_dump($form);

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
        return false;
    }
    return true;
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input)) {
        $field['error'] = 'Įveskite skaičių!';

        return false;
    }
    return true;
}

//function validate_max_100($field_input, &$field) {
//    if ($field_input > 100) {
//        $field['error'] = 'Per daug metų!';
//        return false;
//    }
//    return true;
//}
//
//function validate_is_positive($field_input, &$field) {
//    if ($field_input < 0) {
//        $field['error'] = 'Įveskite teigiamą skaičių!';
//        return false;
//    }
//    return true;
//}
//
//function validate_is_email($field_input, &$field) {
//    if ($field_input = !preg_match("/^[a-zA-Z ]*$/")) {
//        $field['error'] = 'Įveskite teisingą el.pašto adresą!';
//        return false;
//    }
//    return true;
//}
//function get_form_input($form) {
//    $filter_parameters = [];
//
//    foreach ($form['fields'] as $field_id => $field) {
//        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
//    }
//
//    return filter_input_array(INPUT_POST, $filter_parameters);
//}
//function validate_form(&$form) {
//    $filtered_input = get_form_input($form);
//    foreach ($form['fields'] as $field_id => &$field) {
//        $field_input = $filtered_input[$field_id];
//        $field['attr']['value'] = $field_input;
//        foreach ($field['validate'] ?? [] as $validator_id => $validator) {
//            $validator($filtered_input[$field_id], $field);
//        }
//    }
//}

/**
 * Sanitize all form inputs
 * @param array $form
 * @return array
 */
function get_filtered_input($form) {
    $filter_parameters = [];
    foreach ($form['fields'] as $field_id => $field) {
        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }
    var_dump($filter_parameters);
    return filter_input_array(INPUT_POST, $filter_parameters);
}

//$inputs = get_filtered_input($form);
//
function validate_form($filtered_input, &$form) {
    $success = true;

    foreach ($form['fields'] as $field_id => &$field) {
        $field_input = $filtered_input[$field_id];
        $field['value'] = $field_input;

        foreach ($field['validators'] ?? [] as $validator) {
            $is_valid = $validator($filtered_input[$field_id], $field);
            if (!$is_valid) {
                $success = false;
                break;
            }
        }
    }

    if ($success) {
        if (isset($form['callbacks']['success'])) {
            $form['callbacks']['success']($filtered_input, $form);
        }
    } else {
        if (isset($form['callbacks']['fail'])) {
            $form['callbacks']['fail']($filtered_input, $form);
        }
    }


    return $success;
}

function form_success($filtered_input, $form) {
    $suma = $filtered_input['pirmas'] + $filtered_input['antras'];
    var_dump("Suma: $suma");
}

function form_fail($filtered_input, $form) {
    var_dump('fail:');
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}
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

