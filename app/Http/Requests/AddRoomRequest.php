<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRoomRequest extends FormRequest
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
            'title' => 'required',
            'room_type' => 'required', 
            'room_number' => 'required',
            'description' => 'required',
            'image' => 'required',  
            'room_banner' => 'required',
            'availability' => 'required',
            'price_per_night' => 'required',
        ];
    }
}
