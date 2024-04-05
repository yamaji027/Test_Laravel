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
       <h1>詳細ページ</h1>
      <div>
        <label>ID</label>
        <div id="id" class="border border-black">{{ $test->id }}</div>
        <label>名前</label>
        <div id="name" class="border border-black">{{ $test->name }}</div>
        <label>メールアドレス</label>
        <div id="email" class="border border-black">{{ $test->email }}</div>   
        <label>作成日時</label>
        <div name="password" id="password" class="border border-black">{{ $test->created_at }}</div>
        <p class="text-red-500 font-medium text-xl"><a href="{{ route('tests.edit',['id' => $test->id]) }}">編集</a></p>
        
        <form id="delete_{{ $test->id }}" action="{{ route('tests.destroy', ['id' => $test->id]) }}" method="POST">
            @csrf
            <a href="#" data-id="{{ $test->id }}" onclick="deletePost(this)">削除</a>
        </form>
    </div>
    </body>
    <script>
        function deletePost(e){
            'use strict'
            if(confirm('本当に削除していいですか？')){
                document.getElementById('delete_' + e.dataset.id).submit()
            }
        }
    </script>
</html>