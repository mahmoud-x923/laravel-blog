<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <article>
        <h1>
            <?= $post->title; ?>
        </h1>

        <div>
            <?= $post->body; ?>
        </div>

        <a href="/">GO Back</a>
    </article>
</body>

</html>