<?php

namespace App\Http\Requests\Votes;

use Illuminate\Foundation\Http\FormRequest;

class StoreVotesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'hero_id' => 'required|int',
            'action' => 'required|string'
        ];
    }
}
