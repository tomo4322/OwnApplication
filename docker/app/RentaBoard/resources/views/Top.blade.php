<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Rent a Board</title>
</head>
<header>
    <div class="header-title">
        <h1 class="title">Rent a Board</h1>
    </div>
        <div class="header-menu">
        <ul>
        {{-- <li><a href="{{ route('mypage') }}" class="headerBtn">管理画面</a></li>
        <li><a href="{{ route('mypage') }}" class="headerBtn">マイページ</a></li>
        <li><a href="{{ route('putUp') }}" class="headerBtn">出品</a></li> --}}
        </ul>
    </div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="BoardSearch">
        <form  action="" method="post">
            <input type="search" name="search" placeholder="都道府県またはサーフボードブランドを入力">
            <input type="submit" name="submit" value="検索">
        </form>
    </div>
</header>
<body>
    <div class="content">
        <h2>Rent a Board(レンタボード)</h2>
        <h2>サーフボードシェアプラットフォーム</h2>
    </div>
    <div>
        <h1>都道府県一覧</h1>
    </div>
    <div class="prefecture">
            {{-- <!-- <select type="text" class="form-control" name="prefecture_id" required>
        <option disabled style='display:none;' @if (empty($post->prefecture_id)) selected @endif>選択してください</option>
        @foreach($prefectures as $pref)
            <option value="{{ $pref->id }}" @if (isset($post->prefecture_id) && ($post->prefecture_id === $pref->id)) selected @endif>{{ $pref->name }}</option>
        @endforeach
    </select> --> --}}
    <table>
        <tr>
            <td>北海道・東北</td>
            {{-- <td><a href="{{ route('TopShowItems') }}">北海道</a></td> --}}
            <td><a href="#">青森</a></td>
            <td><a href="#">岩手</a></td>
            <td><a href="#">秋田</a></td>
            <td><a href="#">宮城</a></td>
            <td><a href="#">山形</a></td>
            <td><a href="#">福島</a></td>
        </tr>
    </table>
    </div>
</body>