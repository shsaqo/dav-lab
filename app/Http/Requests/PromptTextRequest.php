<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class PromptTextRequest extends FormRequest
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
            'text_hy' => 'max:2500|required',
            'text_ru' => 'max:2500',
            'text_en' => 'max:2500',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'պարտադիր դաշտ',
            'max' => 'Տեքստը չպետք է գերազանցի 2500 սիմվոլը',
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
