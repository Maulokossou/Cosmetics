<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventTicketRequest extends FormRequest
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
            'event' => ['required', 'exists:events,id'],
            'name' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'num_left' => ['required', 'integer'],
            'description' => ['string', 'max:200', 'nullable'] ,
        ];
    }
}
