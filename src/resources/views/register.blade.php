@extends('app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="register">
    <div class="register__header">
        <h2 class="register__title">Register</h2>
    </div>
    <div class="register__content">
        <form class="register__form" action="/testregister" method="post">
        @csrf
          <div class="form__name">
            <p class="name">お名前</p>
            <div class="text">
            <input class="text__area" type="text" value="例:山田  太郎" name="name"></div>
            
            <div style="color:red">
            @error('name')
            {{$errors->first('name')}}
            @enderror
            </div>
            
          </div>

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
            <button class="button__register" type="submit">登録</button></div>
        </form>
    </div>
</div>
@endsection