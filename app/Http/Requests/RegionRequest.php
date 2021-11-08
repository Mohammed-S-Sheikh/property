<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
            'city_id' => [$requirment, 'numeric', 'exists:cities,id'],
            'name_ar' => [$requirment, 'string'],
            'name_en' => [$requirment, 'string'],
        ];
    }
}
