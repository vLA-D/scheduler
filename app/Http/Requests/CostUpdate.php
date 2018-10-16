<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CostUpdate
 * @package App\Http\Requests
 */
class CostUpdate extends FormRequest
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
            'title'       => 'string:64',
            'amount'      => 'integer',
            'description' => 'string:255',
            'seller_id'   => 'integer|exists:sellers,id'
        ];
    }
}
