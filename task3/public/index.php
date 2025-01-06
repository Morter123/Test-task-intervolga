<?php 
require_once('../config/db.php');
require_once('../controller/comments.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница с комментариями</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="card">
            <div class="card-header">
                Здесь выводится никнейм и дата
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Текст соо</p>
                </blockquote>
            </div>
        </div>

        <form action="" method="POST" class="mt-3">
            <div class="">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="" class="form-control" name="nickname" placeholder="Имя">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" name="text" rows="3" placeholder="Введите текст"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>

    </div>

</body>

</html>