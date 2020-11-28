<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlide extends FormRequest
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
            'name' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'file' => 'required',
            'resolution_id' => 'required',
            'show_time' => 'required',
            'order' => 'required'
        ];
    }
}
