<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'max:8', 'string'],
            'address' => ['required', 'max:255',],
            'opinion' => ['required', 'max:120']


        ];
    }

    public function messages()
    {
        return [
            'lname.required' => '名前を入力してください',
            'lname.string' => '名前を文字列で入力してください',
            'lname.max' => '名前を255文字以下で入力してください',
            'fname.required' => '名前を入力してください',
            'fname.string' => '名前を文字列で入力してください',
            'fname.max' => '名前を255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.string' => '郵便番号を文字列で入力くしてください',
            'postcode.max' => '8文字で入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => 'ご意見を120文字以下で入力してください'
        ];
    }

    protected function getRedirectUrl()
    {
        return 'verror';
    }
}
