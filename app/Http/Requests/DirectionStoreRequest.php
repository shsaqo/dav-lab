<?php


namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;


class DirectionStoreRequest extends FormRequest
{
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
            'name_hy' => 'max:500|required',
            'name_ru' => 'max:500',
            'name_en' => 'max:500',
            'upload' => 'mimes:jpeg,jpg,png,gif|max:12000',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'պարտադիր դաշտ',
            'max' => 'Տեքստը չպետք է գերազանցի 500 սիմվոլը',
            'upload.mimes' => 'Նկարի սխալ ձևաչափ ',
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
