<?php

namespace App\Http\Requests\Carnets;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarnetsRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100',
                Rule::unique('carnets')->ignore($this->carnet)],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'string', 'max:1000'],
        ];
    }

    public function messages() {
        return [
            'name.unique' => __('validation.custom.carnets.name_unique')
        ];
    }
}
