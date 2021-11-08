<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $requirment = request()->isMethod('POST') ? 'required' : 'sometimes';

        return [
            'name_ar' => [$requirment, 'string'],
            'name_en' => [$requirment, 'string'],
            'path' => [$requirment, 'string'],
            'order' => [$requirment, 'numeric'],
        ];
    }
}