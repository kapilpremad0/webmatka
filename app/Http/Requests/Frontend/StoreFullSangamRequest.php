<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreFullSangamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'open_patti' => 'required|numeric|digits:3|min:0|max:999|nullable',
            'close_patti' => 'required|numeric|digits:3|min:0|max:999|nullable',
            'amount' => 'required|numeric'
        ];
    }
}
