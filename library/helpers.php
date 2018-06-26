<?php

// Validation request in model
function validation($request, $rules, $messages){
    $response = Validator($request, $rules, $messages);
    return $response;
}

// Return errors references function validation()
function validationErrors($errors, $add_array = null){
    $messages_array = array();
    $messages = $errors->errors()->messages();
    foreach ($messages as $message => $value) {
        $messages_array["$message"] = $value[0];
    }
    if($add_array != null){
        foreach ($add_array as $add => $value) {
            $messages_array["$add"] = $value;
        }
    }
    return $messages_array;
}

