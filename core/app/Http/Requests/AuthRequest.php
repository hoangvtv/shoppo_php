<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AuthRequest extends FormRequest
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
        $setting = Setting::first();
        $password = Auth::check() ? '' : 'required|';

        return [
            'g-recaptcha-response' => $setting->recaptcha == 1 ?  $password : '',
            'login_email'=> 'required|email',
            'login_password'   => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => __('Please verify that you are not a robot.'),
            'login_email.required' => __('Email field is required.'),
            'login_email.email'   => __('The email must be a valid email address.'),
            'login_password.required'    => __('Password field is required.')
        ];
    }

}
