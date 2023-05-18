<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:20',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }
    public function attributes()
    {
        return[
            'name'=> 'team name',
        ];
    }
    public function messages()
    {
        return[
            'description.required'=> 'You must enter a team description',
        ];
    }
}
