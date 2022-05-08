

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/common.css">
    <title>Stream</title>
</head>
<body>
    <main>
        <section class="container-fluid">
            <div class="row justify-content-center p-5">
                <div class="col-5">
                    <form action="../controller/content.php" method="post">
                        <!-- content  -->
                        <h1 class="mb-2">Insert your content</h1>
                        <div class="box-input-title d-flex justify-content-between mb-2">
                            <label for="input-title">Inserisi il titolo del contenuto</label>
                            <input id="input-title" type="text" name="title" placeholder="contenuto">
                        </div>
                        <div class="box-input-year d-flex justify-content-between mb-2">
                            <label for="input-year">Production Year</label>
                            <input id="input-year" type="number" name="year"  placeholder="year">
                        </div>
                        <div class="box-input-director d-flex justify-content-between mb-2">
                            <label for="input-director">Director</label>
                            <input id="input-director" type="text" name="director" placeholder="director">
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <label for="input-type">Content type</label>
                            <input id="input-content-type" type="text" name="type_content" placeholder="content type">
                        </div>
                        <!-- comment -->
                        <h1 class="mb-2">Insert your comment</h1>
                        <div class="d-flex justify-content-between mb-2">
                            <label for="input-username">Username</label>
                            <input id="input-username" type="text" name="username" placeholder="username">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <label for="input-vote">Vote</label>
                            <input id="input-vote" type="number" name="vote"  placeholder="vote">
                        </div>
                        <div class="d-flex flex-column mb-2">
                            <label for="input-comment mb-1">Comment</label>
                            <textarea id="input-comment" name="comment"  cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit">Load Movie!</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>