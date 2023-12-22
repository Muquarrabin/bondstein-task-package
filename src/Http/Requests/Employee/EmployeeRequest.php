<?php

namespace Muquarrabin\BondsteinTaskPackage\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => ['required'],
            'job_title' => ['required'],
            'phone' => ['required', 'regex:/^(?:\+8801|8801|01)[3456789]\d{8}$/', 'string'],
            'address' => ['nullable', 'string'],
        ];
    }
}
