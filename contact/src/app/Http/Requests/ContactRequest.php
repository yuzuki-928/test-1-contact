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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            //'gender' => [''],
            'email' => ['required', 'string', 'email', 'max:255'],
            /*'tel1' => ['required', 'numeric', 'digits_between:2,5'],
            'tel2' => ['required', 'numeric', 'digits_between:2,5'],
            'tel3' => ['required', 'numeric', 'digits_between:2,5'],*/
            'tel' => ['required', 'numeric', 'digits_between:2,5'],
            'address' => ['required', 'string', 'max:255'],
            'id' => ['required', 'string'],
            'detail' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'last_name.string' => '姓を入力してください',
            'first_name.string' => '名を入力してください',
            'last_name.max' => '姓を入力してください',
            'first_name.max' => '名を入力してください',

            'gender.' => '性別を選択してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスはメール形式で入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.max' => 'メールアドレスを入力してください',

            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を入力してください',
            'tel.digits_between' => '電話番号は5桁までの数字で入力してください',

            'id.required' => 'お問い合わせの種類を選択してください',
            'id.string' => 'お問い合わせの種類を選択してください',

            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.string' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
