@extends('app')

<style>
svg.w-5.h-5{
    width: 30px;
    height: 30px;
}
</style>

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm">
    <div class="confirm__header">
        <h2 class="confirm__header">Admin</h2>
    </div>
    <div class="confirm__form">
        <form action="" method="">
            <input class="name-email" type="text" value="名前やメールアドレスを入力してください">
            <select class="select__gender" name="" id="">
                <option value="">性別</option>
            </select> 
            <select class="select__kind" name="" id=""> 
                <option value="">お問い合わせの種類</option>
            </select>
            <select class="select__when" name="" id="">
                <option value="">年/月/日</option>
            </select>
            
            <button class="search" type="submit">検索</button>
            <button class="reset" type="">リセット</button>
        </form>
    </div>

    <div class="second__haeder">
        <div class="headpara">
            <p class="para">エクスポート</p>
            {{$datas->links('vendor.pagination.tailwind')}}
        </div>

    </div>

    <div class="table">
        <table class="table__all">
            
            <tr class="table__header">
                <th class="table__name">お名前</th>
                <th class="table__gender">性別</th>
                <th class="table__email">メールアドレス</th>
                <th class="table__kind" colspan="2">お問い合わせの種類</th>
            </tr>
            
            
            @foreach($datas as $data)
            <tr class="data__row">
                <td class="data__name">
                   {{$data->last_name}} {{$data->first_name}} 
                </td>
                <td class="data__gender">
                    {{$data->gender_label}}
                </td>
                <td class="data__email">
                    {{$data['email']}}
                </td>
                <td class="data__kind">
                    {{$data['building']}}
                </td>
                <td>
                    <button class="data__button" type="button" data-bs-toggle="modal" data-bs-target="#detailModal{{$data->id}}">詳細
                    </button>
                </td>
            </tr>

            <!--
            <div class="modal__all" id="detailModal{{$data->id}}">
                <div class="modal__group">
                    <button type='button' class='close__button' data-bs-toggle='modal'>×</button>
                    <p><strong>お名前</strong>{{$data->last_name}} {{$data->first_name}}</p>
                    <p><strong>性別</strong>{{$data->gender_label}}</p>
                    <p><strong>メールアドレス</strong>{{$data['email']}}</p>
                    <p><strong>電話番号</strong>{{$data['tel']}}</p>
                    <p><strong>住所</strong>{{$data['address']}}</p>
                    <p><strong>建物名</strong>{{$data['building']}}</p>
                    <p><strong>お問い合わせの種類</strong></p>
                    <p><strong>お問い合わせ内容</strong>{{$data['detail']}}</p>
                </div>
            </div> -->
            @endforeach
        </table>
    </div>
</div>
@endsection