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
        <li><a href="{{ route('mypage') }}" class="headerBtn">マイページ</a></li>
        <li><a href="{{ route('putUp') }}" class="headerBtn">出品</a></li>
        <li><a href="{{ route('create') }}" class="headerBtn">会員登録</a></li>
        <li><a href="{{ route('login') }}" class="headerBtn">ログイン</a></li>
        </ul>
    </div>
</header>
<body>
    <div>
        <h1>出品商品一覧</h1>
    </div>
    <div class="table">
        <table class="userItemsTable">
            <tr>
                <th>出品日</th>
                <th>希望日時</th>
                <th>都道府県</th>
                <th>希望取引場所</th>
                <th>ブランド名</th>
                <th>ボード名</th>
                <th>長さ</th>
                <th>浮力</th>
                <th>販売形式</th>
                <th>金額</th>
                <th>お気に入り</th>
                <th>お問い合わせ</th>
            </tr> 
            トップ画面でクリックされた都道府県とひも付いたデータをDbから取得してループさせて表示
            {{-- @foreach($prefectures as $pref) --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>     
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <p>💛</p> 
                </td>
                <td class="chat">
                    <a href="" name="chat">チャットする</a> 
                </td>
            </tr>
            {{-- @endforeach --}}
        </table>
        <div>
            <button type="button" onClick="history.back()">戻る</button>
        </div>
    </div>
</body>