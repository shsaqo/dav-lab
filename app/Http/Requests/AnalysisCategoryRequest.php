<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class AnalysisCategoryRequest extends FormRequest
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
            'name_hy' => 'max:250|required',
            'name_ru' => 'max:250',
            'name_en' => 'max:250',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'պարտադիր դաշտ',
            'max' => 'Տեքստը չպետք է գերազանցի 250 սիմվոլը',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = redirect()
            ->back()
            ->with('message', 'Ops! Some errors occurred')
            ->withErrors($validator);
        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
