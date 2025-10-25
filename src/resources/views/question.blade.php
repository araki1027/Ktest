@extends('app')

@section('css')
<link rel="stylesheet" href="{{asset('css/quest.css')}}">
@endsection

@section('content')
<div class="question">
    <div class="header__quest">
        <h2>Contact</h2>
    </div>
    <div>
        <form action="/quest-c" method="post">
            @csrf
            <div class="quest">
                <p>お名前</p>
                <input class="first" type="text" value="例:山田" name="first_name">
                <input class="last" type="text" value="例:太郎" name="last_name">
            </div>

            <div class="quest">
                <p>性別</p>
                <input class="man" type="radio" name="gender" value="男性"><p>男性</p>
                <input class="woman" type="radio" name="gender" value="女性"><p>女性</p>
                <input class="etc" type="radio" name="gender" value="その他"><p>その他</p>
            </div>

            <div class="quest">
                <p>メールアドレス</p>
                <input class="mail" type="email" value="例:test@example.com" name="email">
            </div>

            <div class="quest">
                <p>電話番号</p>
                <input class="one" type="tel" value="080" name="one"><p>-</p>
                <input class="two" type="tel" value="1234" name="two"><p>-</p>
                <input class="three" type="tel" value="5678" name="three">
            </div>

            <div class="quest">
                <p>住所</p>
                <input class="address" type="text" value="例:東京都渋谷区千駄ヶ谷1-2-3" name="address">
            </div>

            <div class="quest">
                <p>建物名</p>
                <input class="build" type="" value="例:千駄ヶ谷マンション101" name="building">
            </div>

            <div class="quest">
                <p>お問い合わせの種類</p>
                <select class="option" name="category_id" id="">
                    <option value="選択してください">選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ョップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
            </div>

            <div class="quest-area">
                <div class="area">
                <p class="areaheader">お問い合わせ内容</p></div>
                <textarea name="detail" clos="500" rows="5">お問い合わせ内容をご記載ください</textarea>
            </div>

            <div class="button-quest">
            <button type="submit">確認画面</button>
            </div>
        </form>
    </div>
</div>
@endsection