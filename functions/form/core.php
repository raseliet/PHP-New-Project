<?php

require 'validators.php';

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

