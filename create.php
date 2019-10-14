<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

$form = [
    'title' => 'Join Team',
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team name',
                ]
            ],
            'validators' => [
                'validate_not_empty',
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Create',
        ],
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

$teams = [
    [
        'team_name' => 'lochai',
        'players' => [
            [
                'nickname' => 'killer',
                'score' => 10
            ],
            [
                'nickname' => 'thriller',
                'score' => 10
            ]
        ]
    ],
    [
        'team_name' => 'nelochai',
        'players' => [
            [
                'nickname' => 'winner',
                'score' => 10
            ],
            [
                'nickname' => 'newinner',
                'score' => 10
            ]
        ]
    ],
];


//function form_fail($filtered_input, &$form) {
//    $form['message'] = 'Fail!';
//
//    $json_string = json_encode($filtered_input);
//    setcookie('fields', $json_string, time() + 3600, '/');
//}
//
//function form_success($filtered_input, &$form) {
//    $form['message'] = 'success!';
//    $old_array = file_to_array('data/db.txt');
//    $old_array[] = $filtered_input;
////    var_dump($old_array);
//    array_to_file($old_array, 'data/db.txt');
//
//    setcookie('user', $filtered_input['nickname'], time() + 3600, '/');
//    $_COOKIE['user'] = $filtered_input['nickname'];
//}
//
//$filtered_input = get_filtered_input($form);
//if (!empty($filtered_input)) {
//    validate_form($filtered_input, $form);
//}
//$array = file_to_array('data/db.txt');
////foreach ($array as $key => $value) {
//
//}
//var_dump($_COOKIE);
//if (!isset($_COOKIE['form_submission'])) {
//    $id = rand(100000, 999999);
//    $submitted = 1;
//} else {
//    if ($_COOKIE['submitted'] < 3) {
//        $id = $_COOKIE['form_submission'];
//        $submitted = ++$_COOKIE['submitted'];
//    } else {
//        $form['message'] = 'Per daug kartų bandyta prisijungti!';
//        $form['buttons']['submit']['disabled'] = null;
//        $id = $_COOKIE['form_submission'];
//    }
//}
//
//setcookie('form_submission', $id, strtotime('+30 days'));
//setcookie('submitted', $submitted, strtotime('+30 days'));
//
////$h1_text = "User ID: $id";
////$h2_text = "Visits: $visits";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forma</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>

    <style>

        body {
            /*background-image: ;*/
            background-size: cover;
        }
        div {
            display: inline-block;


        }
        /*        th, td {
                    padding: 15px;
                    text-align: left;
                }
                table#t01 {
                    width: 100%;
                    background-color: #f1f1c1;*/

    </style>

    <body>
<?php require 'templates/form.tpl.php'; ?>
        <?php if (isset($_COOKIE['user'])) : ?>

            <?php foreach ($array ?? [] as $user): ?>
                <?php var_dump($user); ?>

                                                        <!--                    <th>//<?php print $user['nickname']; ?></th>
                                                            <th>//<?php print $user['password']; ?></th>-->

    <?php endforeach; ?>

        <?php else: ?>

        <?php endif; ?>
    </body>
</html>