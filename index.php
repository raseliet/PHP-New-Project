<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'button' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'send'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'clear'
        ]
    ],
    'fields' => [
        'first_name' => [
            'type' => 'text',
            'label' => 'vardas',
            'placeholder' => 'Rasa'
        ],
        'last_name' => [
            'type' => 'text',
            'label' => 'pavarde',
            'placeholder' => 'Lietuvnikaite'
        ],
        'age' => [
            'type' => 'number',
            'label' => 'age',
            'placeholder' => 22
        ]
    ]
];

var_dump($form);

/**
 * Generates HTML attributes
 * @param array $attr
 * @return string
 */
function html_attr($attr) {
    $html_attr_array = [];

    foreach ($attr as $attribute_key => $atribute_value) {
        $html_attr_array[] = strtr('@key="@value"', [
            '@key' => $attribute_key,
            '@value' => $atribute_value
        ]);
    }
    return implode("", $html_attr_array);
}

?>

<html>
    <body>

<?php require 'templates/form.tpl.php'; ?>

    </body>
</html>

