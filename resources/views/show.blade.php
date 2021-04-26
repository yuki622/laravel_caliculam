<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <h2 class='title'>
            {{ $post->title }}
            </a>
        </h2>
        <div class='content'>
            <div class='content_post'>
                <h4>やほー</h4>
                <p>{{ $post->body }}</p>
                <p class='updated_at'>{{ $post->updated_at }}</p>
            </div>
        <div class='footer'>
            <a href='/'>back</a>
        </div>
    </body>
</html>    