<?php

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

function validate_max_100($field_input, &$field) {
    if ($field_input > 100) {
        $field['error'] = 'Per daug metų!';
        return false;
    }

    return true;
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Įveskite teigiamą skaičių!';
        return false;
    }

    return true;
}

function validate_password($field_input, &$field) {
    if (strlen($field_input) < 8) {
        $field['error'] = 'Įveskite daugiau nei 8 simbolius!';
        return false;
    }

    return true;
}

/**
 *
 * @param array $field_input
 * @param  $field
 */
function validate_team($field_input, &$field) {

    $teams = file_to_array('./data/users.txt');
    if (!empty($teams)) {
        foreach ($teams as $value) {
            if ($value['team'] == $field_input) {
                $field['error'] = 'Tokia komanda jau egzistoja';
                return false;
            }
        }
    }
    return true;
}

function validate_fields_match($filtered_input, &$form, $params) {
    $referense_value = $filtered_input[$params[0]];
    foreach ($params as $field_id) {
        if ($referense_value !== $filtered_input[$field_id]) {
            $form['fields'][$field_id]['error'] = 'Laukeliai nesutampa';
            return false;
        }
    }
    return true;
}

function validate_email_unique($field_input, &$field) {

    var_dump('vykdomas kodas');
    $users = file_to_array('./data/users.txt');

    var_dump('Ieita i file to array');
    if (!empty($users)) {
        $unique_email = $field_input;

        foreach ($users as $user) {
            var_dump($unique_email);
            if ($user['email'] == $unique_email) {
                var_dump('toks emailas egzistuoja');
                $field['error'] = 'Toks useris jau egzistoja';

                return false;
            }
        }
    }
    return true;
}
