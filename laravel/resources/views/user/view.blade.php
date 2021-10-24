<!DOCTYPE HTML>
<html lang="ja" >
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- ヘッダー -->
@include('includes.header')

<!-- コンテンツ -->
@yield('content')

<!-- フッター -->
@include('includes.footer')
</body>
</html>