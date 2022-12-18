<?php

namespace App\Http\Requests;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisteringRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password' =>[
                'required',
                'string',
                'min:0',
                'max:255',
            ],
            'role' =>[
                'required',
                Rule::in([
                    UserRoleEnum::APPLICANT,
                    UserRoleEnum::HR,
                ])
            ],

        ];
    }
}
