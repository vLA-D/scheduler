<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CostCreate
 * @package App\Http\Requests
 */
class CostCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required|string:64',
            'amount'      => 'required|integer',
            'description' => 'required|string:255',
            'seller'      => 'required|integer|exists:sellers,id',
            'date'        => 'date'
        ];
    }
}
