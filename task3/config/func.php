<?php

function dump($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function check($fillable)
{
    $data = [];

    foreach ($_POST as $key => $value) {
        if (in_array($key, $fillable)) {
            $data[$key] = htmlspecialchars(trim($value));
        }
    }
    return $data;
}
