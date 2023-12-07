@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-form__content">
  <div class="admin-form__heading">
    <h2>管理システム</h2>
  </div>
  <div class="admin-system">
    <form>
      <div class="system__group">
        <div class="system__group-title">
          <label class="system__label--item" name="name" id="name-box">お名前</label>
          <input type=" text" id="fullname" name="name">
        </div>
        <div class="system__group-title" id="sex">
          <span class="system__label--item">性別</span>
          <div class="system__group-content">
            <input id="all" type="radio" name="gender" value="1" checked="checked" />
            <label for="all" name="gender" value="全て">全て</label>
            <input id="men" type="radio" name="gender" value="2" />
            <label for="men" name="gender" value="男性">男性</label>
            <input id="women" type="radio" name="gender" value="3" />
            <label for="women" name="gender" value="女性">女性</label>
          </div>
        </div>
        <div class="system__group-title">
          <span class="system__label--item">登録日</span>
          <div class="system__group-content">
            <input type="text" name="create_at">
            <span>~</span>
            <input type="text" name="create_at">
          </div>
        </div>
        <div class="system__group-title">
          <span class="system__label--item">メールアドレス</span>
          <div class="system__group-content">
            <input type="email" name="email">
          </div>
        </div>
      </div>
      <div class="system__button">
        <button class="system__button-search" type="submit" value="検索">検索</button><br/>
        <a href="" class="reset">リセット</a>
      </div>
  </div>
  </form>
</div>
@endsection