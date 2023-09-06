<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|integer',
            'file' => 'required',
            'thumbnail' => 'required',
            'rating' => 'required|numeric',
            'serie_id' => 'required|integer',
            'date'=>'required|date  ',



        ];
    }
}
