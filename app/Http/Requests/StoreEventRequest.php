<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'location' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['required', 'string'] ,
            'summary' => ['required', 'string'] ,
            'date' => ['required', 'date', 'after_or_equal:today'] ,
            'time' => ['string'] ,
            'cover_img' => ['required', 'file', 'image'] ,
        ];
    }
}
