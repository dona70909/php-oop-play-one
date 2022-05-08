<?php

    /* include classes */
    include '../model/Content.php';
    include '../model/Comment.php';

    $title = $_POST["title"];
    $year = $_POST["year"];
    $director = $_POST["director"];
    $type_content = $_POST["type_content"];
    $cover = $_POST["cover"];

    $content_created = new Content($title,$year,$director,$type_content,$cover);

    $username = $_POST["username"];
    $vote = $_POST["vote"];
    $comment = $_POST["comment"];
    
    $comment_created = new Comment($username,$vote,$comment);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/partials/content.css">
    <link rel="stylesheet" href="../style/common.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="wrapper-cards-movie p-3">
            <div class="row justify-content-center row-cards-movie">
                <div class="card card-content col-2">
                    <div class="d-flex justify-content-center p-2">
                        <img class="card-img-top" src="<?php  echo $content_created->cover ?>" alt="Card image content">
                    </div>
                    <div class="card-body card-content-body">
                        <h5 class="card-title">Title:</h5>
                        <p><?php echo $content_created->title ?></p>
                        <h5>Director:</h5>
                        <p><?php echo $content_created->director ?></p>
                        <h5>Year:</h5>
                        <p><?php echo $content_created->year ?></p>
                        <h5>Type content: </h5>
                        <p><?php echo $content_created->type_content ?></p>
                    </div>
                    <div class="card-body comment-body">
                        <h5 class="card-title">Username:</h5>
                        <p><?php echo $comment_created->username ?></p>
                        <h5>Vote:</h5>
                        <p><?php echo $comment_created->vote ?></p>
                        <h5>Comment:</h5>
                        <p><?php echo $comment_created->comment ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>