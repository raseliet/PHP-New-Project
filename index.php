<?php
$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'title' => 'Įveskite duomenis',
    'fields' => [
        'first_name' => [
            'label' => 'Įveskite vardą',
            'attr' => [
                'type' => 'text',
                'value' => '',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'bg-green',
                    'placeholder' => 'Rasa'
                ]
            ],
            'error' => 'Klaidingai įvestas vardas',
        ],
        'last_name' => [
            'label' => 'Įveskite pavardę',
            'attr' => [
                'type' => 'text',
                'value' => '',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'bg-green',
                    'placeholder' => 'Lietuvnikaite'
                ]
            ],
//            'error' => 'Klaidinga pavardė',
        ],
        'age' => [
            'label' => 'Įveskite amžių',
            'attr' => [
                'type' => 'number',
                'value' => '',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'bg-blue',
                    'placeholder' => '33'
                ],
            ],
//            'error' => 'klaidingas vardas',
        ],
        'gender' => [
            'label' => 'Pasirinkite lytį',
            'options' => [
                'vyras' => 'Vyras',
                'moteris' => 'Moteris'
            ],
            'attr' => [
                'type' => 'select'
            ],
            'extra' => [
                'attr' => [
                    'class' => 'bg-blue',
                    'placeholder' => ''
                ],
            ],
//            'error' => 'klaida',
        ],
    ],
    'button' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'send'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'clear'
        ],
    ],
    'message' => 'Forma užpildyta',
];

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

