<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class AboutRequest extends FormRequest
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
            'text_hy' => 'max:50000|required',
            'text_ru' => 'max:50000',
            'text_en' => 'max:50000',
//            'upload.*' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg',
//            'license.*' => 'mimes:jpeg,jpg,png,gif',

            'name_hy' => 'max:150',
            'name_ru' => 'max:150',
            'name_en' => 'max:150',

            'prompt_text_hy' => 'max:2500',
            'prompt_text_ru' => 'max:2500',
            'prompt_text_en' => 'max:2500',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'պարտադիր դաշտ',
            'max' => 'Տեքստը չպետք է գերազանցի 50000 սիմվոլը',
            'mimes' => 'Նկարի/վիդեոյի սխալ ձևաչափ ',
            'license.*.mimes' => 'Լիցենզիա նկարի սխալ ձևաչափ',

            'name_hy.max' => 'թվական/բնութագիր տեքստը չպետք է գերազանցի 150 սիմվոլը',
            'name_ru.max' => 'թվական/բնութագիր տեքստը չպետք է գերազանցի 150 սիմվոլը',
            'name_en.max' => 'թվական/բնութագիր տեքստը չպետք է գերազանցի 150 սիմվոլը',

            'prompt_text_hy.max' => 'թվական/բնութագիր տեքստը չպետք է գերազանցի 2500 սիմվոլը',
            'prompt_text_ru.max' => 'թվական/բնութագիր տեքստը չպետք է գերազանցի 2500 սիմվոլը',
            'prompt_text_en.max' => 'թվական/բնութագիր տեքստը չպետք է գերազանցի 2500 սիմվոլը',

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
