<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>To-Do</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<section class="jumbotron text-center">
    <div class="container">
        <h1>To-Do List</h1>
        <p class="lead text-muted">Списочек дел. Не более.</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Кнопка</a>
            <a href="#" class="btn btn-secondary my-2">Еще одна кнопка</a>
        </p>
    </div>
</section>

<form action="" method="post">
    <div class="md-form amber-textarea active-amber-textarea-2">
        <label for="form16">Твои прекрасные мысли</label><br>
        <input class="mt-5 form-control" type="text" name="title" placeholder="Название">
        <textarea name="name" id="form16" class="md-textarea form-control mt-5" rows="3"></textarea><br>
        <input type="submit" class="btn btn-success">
    </div>
</form>

<?php

@$title = $_POST['title'];
@$name = $_POST['name'];
@$date = $_POST['date'];

//@$cost = $_POST['cost'];

$mysqli = new mysqli('localhost', 'root', '', 'to-do');
$query = $mysqli->query("INSERT INTO `posts` (`id`, `title`, `name`, `date`) VALUES (NULL, '$title', '$name', '2020-07-15 00:35:03'); ");

$mysqli->close();


?>



</body>
</html>
