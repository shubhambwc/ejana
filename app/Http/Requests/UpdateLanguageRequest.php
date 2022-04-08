<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;

class UpdateLanguageRequest extends FormRequest
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
        $rules['language'] = 'required|unique:languages,language,'.$this->route('language')->id;
        $rules['iso_code'] = 'required|unique:languages,iso_code,'.$this->route('language')->id;

        return $rules;
    }
}
