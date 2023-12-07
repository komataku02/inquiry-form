@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>お問い合わせ内容確認</h2>
  </div>
  <form class="form" action="/contacts" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input type="text" name="lname" value="{{ old('lname', $contact['lname']) }}" />
            <input type="text" name="fname" value="{{ old('fname', $contact['fname']) }}" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
            <input type="hidden" name="gender" value="{{ old('gender', $contact['gender']) }}" />
            <?php
            if ($contact['gender'] == '1') {
              echo '男性';
            } else if ($contact['gender'] == '2') {
              echo '女性';
            }
            ?>
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input type="email" name="email" value="{{ old('email', $contact['email']) }}" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">郵便番号</th>
          <td class="confirm-table__text">
            <input type="tel" name="postcode" value="{{ old('postcode', $contact['postcode']) }}" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input type="text" name="address" value="{{ old('address', $contact['address']) }}" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <input type="text" name="building" value="{{ old('building', $contact['building']) }}" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <input type="text" name="opinion" value="{{ old('opinion', $contact['opinion']) }}" />
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
    <div class="fix__link">
      <a href="{{ url()->previous() }}">修正する</a>
    </div>
  </form>
</div>
@endsection