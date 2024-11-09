<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreHalfSangamRequest extends FormRequest
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
            'close_amount' => 'numeric|nullable',
            'open_amount' => 'nullable|numeric',
            'open_ank' => 'required_with:close_amount|numeric|min:0|max:9|nullable',
            'close_patti' => 'required_with:close_amount|numeric|digits:3|min:0|max:999|nullable',
            'open_patti' => 'required_with:open_amount|numeric|digits:3|min:0|max:999|nullable',
            'close_ank' => 'required_with:open_amount|numeric|min:0|max:9|nullable',
        ];
    }
}
