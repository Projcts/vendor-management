<?php

namespace Alisons\VendorManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class VendorRequest extends FormRequest
{
    public function authorize()
    {
        // Set to true if authorization is not needed, or implement logic here.
        return true;
    }

    public function rules()
    {
        // Validation rules for vendor creation and updates
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:vendors,email,' . $this->vendor,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'status' => 'nullable|boolean',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'errors' => $validator->errors()
        ], 422));
    }
}
