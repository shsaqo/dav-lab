<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class NewsFreshRequest extends FormRequest
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
                'url' => 'required|unique:news_freshes,url',

                'title_hy' => 'max:150|required',
                'title_ru' => 'max:150',
                'title_en' => 'max:150',

                'text_hy' => 'max:50000|required',
                'text_ru' => 'max:50000',
                'text_en' => 'max:50000',

                'upload' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg|max:12000',
//                'otherPhoto.*' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg',
            ];
        else:
            return [

                'title_hy' => 'max:150|required',
                'title_ru' => 'max:150',
                'title_en' => 'max:150',

                'text_hy' => 'max:50000|required',
                'text_ru' => 'max:50000',
                'text_en' => 'max:50000',

                'upload' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg',
//                'otherPhoto.*' => 'mimes:jpeg,jpg,png,gif,mp4,mov,ogg',
            ];
        endif;
    }

    public function messages()
    {
        return [
            'required' => 'Պարտադիր դաշտ',
            'max' => 'Տեքստը չպետք է գերազանցի 50000 սիմվոլը',
            'upload.mimes' => 'Նկարի/վիդեոյի սխալ ձևաչափ',
            'upload.max' => 'Նկարի/վիդեոյի չափսը չպետք է գերազանցի 10mb',
            'otherPhoto.*.mimes' => 'Նկարի/վիդեոյի սխալ ձևաչափ',

            'title_hy.max' => 'Վերնագիրը չպետք է գերազանցի 150 սիմվոլը',
            'title_ru.max' => 'Վերնագիրը տեքստը չպետք է գերազանցի 150 սիմվոլը',
            'title_en.max' => 'Վերնագիրը տեքստը չպետք է գերազանցի 150 սիմվոլը',

            'text_hy.max' => 'Տեքստը չպետք է գերազանցի 50000 սիմվոլը',
            'text_ru.max' => 'Տեքստը չպետք է գերազանցի 50000 սիմվոլը',
            'text_en.max' => 'Տեքստը չպետք է գերազանցի 50000 սիմվոլը',

            'url.unique' => 'Հղումը պետք է լինի եզակի',
            'url.regex' => 'Հղման սխալ ձևաչափ',

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
