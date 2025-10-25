@extends('app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<div class="register">
    <div class="register__header">
        <h2 class="register__title">Login</h2>
    </div>
    <div class="register__content">
        <form class="register__form" action="/login" method="post">
            @csrf
          <div class="form__mail">
            <p class="mail">メールアドレス</p>
            <div class="email">
            <input class="email__area" type="email" value="例:test@example.com" name="email"></div>

            <div style="color:red">
            @error('email')
            {{$errors->first('email')}}
            @enderror
            </div>
          </div>

          <div class="form__password">
            <p class="password__title">パスワード</p>
            <div class="password">
            <input class="password__area" type="text" value="例:coachtechno6" name="password"></div>

            <div style="color:red">
            @error('password')
            {{$errors->first('password')}}
            @enderror
            </div>
          </div>

          <div class="button__group">
            <button class="button__register" type="submit">ログイン</button></div>
        </form>
    </div>
</div>
@endsection