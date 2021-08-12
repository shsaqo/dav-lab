<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class HomeSliderRequest extends FormRequest
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
        if ($this->method() != 'PUT'):
            return [
                'upload' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|required|max:12000',
                'url' => 'string|max:50',
                'title_hy' => 'string|max:50|required',
                'description_hy' => 'max:1000|required',
                'button_hy' => 'string|max:50|required',
                'title_ru' => 'string|max:50|nullable',
                'description_ru' => 'max:1000|nullable',
                'button_ru' => 'string|max:50|nullable',
                'title_en' => 'string|max:50|nullable',
                'description_en' => 'max:1000|nullable',
                'button_en' => 'string|max:50|nullable',
            ];
        else:
            return [
                'upload' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|max:12000',
                'url' => 'string|max:50',
                'title_hy' => 'string|max:50|required',
                'description_hy' => 'max:1000|required',
                'button_hy' => 'string|max:50|required',
                'title_ru' => 'string|max:50|nullable',
                'description_ru' => 'max:1000|nullable',
                'button_ru' => 'string|max:50|nullable',
                'title_en' => 'string|max:50|nullable',
                'description_en' => 'max:1000|nullable',
                'button_en' => 'string|max:50|nullable',
            ];
        endif;
    }

    public function messages()
    {
        return [
            'upload.mimes' => 'Նկարի/վիդեոյի սխալ ձևաչափ ',
            'upload.required' => 'Նկարը պարտադիր դաշտ է',
            'url.max' => 'Լինկը չպետք է գերազանցի 50 սիմվոլը',
            'title_hy.required' => 'վերնագիրը պարտադիր դաշտ է',
            'title_hy.max' => 'վերնագիրը չպետք է գերազանցի 50 սիմվոլը',
            'description_hy.max' => 'Նկարագրությունը չպետք է գերազանցի 1000 սիմվոլը',
            'description_hy.required' => 'վերնագիրը պարտադիր դաշտ է',
            'button_hy.required' => 'Կնոպկան պարտադիր դաշտ է',
            'button_hy.max' => 'Կնոպկան չպետք է գերազանցի 50 սիմվոլը',

            'title_ru.max' => 'վերնագիրը չպետք է գերազանցի 50 սիմվոլը',
            'description_ru.max' => 'Նկարագրությունը չպետք է գերազանցի 1000 սիմվոլը',
            'button_ru.max' => 'Կնոպկան չպետք է գերազանցի 50 սիմվոլը',

            'title_en.max' => 'վերնագիրը չպետք է գերազանցի 50 սիմվոլը',
            'description_en.max' => 'Նկարագրությունը չպետք է գերազանցի 1000 սիմվոլը',
            'button_en.max' => 'Կնոպկան չպետք է գերազանցի 50 սիմվոլը',
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
