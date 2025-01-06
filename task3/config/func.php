<?php

function check($fillable)
{

    $data = [];

    foreach ($_POST as $key => $value) {
        if (in_array($key, $fillable)) {
            $data[$key] = trim($value);
        }
    }
    return $data;
}
