<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicsRequest extends FormRequest
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
            "title" => "required|string|max:100",
            "description" => "nullable|string",
            "thumb" => "required|string|max:600",
            "price" => "required|numeric|max:9999999.99",
            "series" => "nullable|string|max:100",
            "sale_date" => "required|date|after:today",
            "type" => "nullable|string|max:100",
            "artists" => "required|string",
            "writers" => "required|string",
        ];
    }
}
