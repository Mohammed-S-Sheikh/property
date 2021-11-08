<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
        $requirment = request()->isMethod('POST') ? 'required' : 'sometimes';

        return [
            'path' => [$requirment, 'string'],
            'title' => [$requirment, 'string'],
            'notes' => ['string'],
            'city_id' => [$requirment, 'numeric', 'exists:cities,id'],
            'region_id' => [$requirment, 'numeric', 'exists:regions,id'],
            'type' => [$requirment, 'string'],
            'price' => [$requirment, 'numeric'],
            'name' => [$requirment, 'string'],
            'number' => [$requirment, 'string'],

            'images' => ['array'],
        ];
    }
}
