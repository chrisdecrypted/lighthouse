<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GraphQL Demo</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">

            <div class="mx-auto max-w-5xl">

   
                @foreach ($posts as $post)
                    <article class="bg-gray-300 mx-auto">
                        <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                        <h2 class="text-lg font-semibold">{{ $post->author->name }}</h2>
                        <p class="text-base">{{ $post->content }}</p>
                    </article>
                @endforeach

            </div>

    </body>
</html>
