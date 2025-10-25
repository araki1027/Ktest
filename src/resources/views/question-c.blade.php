@extends('app')

@section('css')
<link rel="stylesheet" href="{{asset('css/questc.css')}}">
@endsection

@section('content')
<div class="confirm">
    <div class="confirm__header">
        <h2>Confirm</h2>
    </div>

    <div class="table">
        <table>
            <tr>
                <td class="row__header">お名前</td>
                <td class="row__text">{{$test["first_name"]}} {{$test["last_name"]}}</td>
            </tr>

            <tr>
                <td class="row__header">性別</td>
                <td class="row__text">{{$test['gender']}}</td>
            </tr>

            <tr>
                <td class="row__header">メールアドレス</td>
                <td class="row__text">{{$test['email']}}</td>
            </tr>

            <tr>
                <td class="row__header">電話番号</td>
                <td class="row__text">{{$test["one"]}} {{$test["two"]}} {{$test["three"]}}</td>
            </tr>

            <tr>
                <td class="row__header">住所</td>
                <td class="row__text">{{$test['address']}}</td>
            </tr>

            <tr>
                <td class="row__header">建物名</td>
                <td class="row__text">{{$test['building']}}</td>
            </tr>

            <tr>
                <td class="row__header">お問い合わせの種類</td>
                <td class="row__text">{{$test['category_id']}}</td>
            </tr>

            <tr>
                <td class="row__header">お問い合わせ内容</td>
                <td class="row__text">{{$test["detail"]}}</td>
            </tr>
        </table>
    </div>

    <div class="option">
        <form action="/questconfirm" method="post">
            @csrf
            <div class="button-quest">
                <input type="hidden" name="f" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
                <input type="hidden" name="" value="{{$test['']}}">
            <button type="submit">送信</button>
        </form>
        <a href="/">修正</a></div>
    </div>
</div>
@endsection