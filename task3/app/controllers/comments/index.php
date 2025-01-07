<?php

$db = classes\Db::getInstance();

$fillable = ['nickname', 'text'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    $data = check($fillable);
    $db->query('INSERT INTO user_comments (nickname, text) VALUES (:nickname, :text)', $data);
}

// $allComments = $db->query('SELECT nickname, text, created_at FROM user_comments');
$allComments = $db->query('SELECT nickname, text, DATE_FORMAT(created_at, "%d %M %Y %H:%i:%s") AS "date" FROM user_comments')->findAll();

require_once VIEWS . "/comments.php";   