<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
       <h1>作成ページ</h1>
      <div>
        <form action="{{ route('tests.update',['id' => $test->id]) }}" method="POST">
            @csrf
        <label>名前</label>
        <input id="name" name="name" class="border border-black" value="{{ $test->name }}">
        <label>メールアドレス</label>
        <input name="email" id="email" class="border border-black" value="{{ $test->email }}">      
        <button type="submit" class="">更新</button>
        </form>     
    </div>
    </body>
</html>