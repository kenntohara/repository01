<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action='/posts/{{ $post->id }}' method='POST'>
            {{ csrf_field() }}
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ ($post->title) }}"/>
            </div>
            <div class="body">
                <h3>Body</h3>
                <textarea type="text" name="post[body]" placeholder="今日はお疲れ様でした。">{{ $post->body }}</textarea>
            </div>
            <input type="submit" value="update">
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>