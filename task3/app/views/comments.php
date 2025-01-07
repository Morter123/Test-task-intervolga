<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница с комментариями</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php require_once VIEWS . '/template/header.php'; ?>

    <div class="container mt-5">

        <?php foreach ($allComments as $comment) : ?>
            <div class="card mb-2">
                <div class="card-header fw-bold">
                    <?php echo htmlspecialchars($comment['nickname']). " " . htmlspecialchars($comment['date']) ?>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?php echo htmlspecialchars($comment['text']) ?></p>
                    </blockquote>
                </div>
            </div>
        <?php endforeach ?>

        <form action="" method="POST" class="mt-3">
            <div class="">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="" class="form-control" name="nickname" placeholder="Имя">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" name="text" rows="3" placeholder="Введите текст"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Отправить</button>
            </div>
        </form>

    </div>

    <?php require_once VIEWS . '/template/footer.php'; ?>

</body>
<script src="js/script.js"></script>

</html>