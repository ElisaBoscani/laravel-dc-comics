<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => 'required|nullable|max:50',
            'description' => 'required|nullable|max:250',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|numeric|min:0',
            'writers' => 'nullable',
            'artists' => 'nullable',
            'type' => 'nullable',
            'sale_date' => 'nullable|date',
            'series' => 'nullable'

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required',

        ];
    }
}
