<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ]
];

function html_attr($attr) {
    $html_attr_array = [];

    foreach ($attr as $attribute_key => $atribute_value) {
        $html_attr_array[] = strtr('@key="@value"',[
        
            '@key' => $attribute_key,
            '@value' => $atribute_value
        ]);

        
    }
    return implode("", $html_attr_array);
}

var_dump(html_attr($form['attr']));
?>

<html>
    <body>

<?php require 'templates/form.tpl.php'; ?>

    </body>
</html>

