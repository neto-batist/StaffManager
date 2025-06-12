<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
    public function rules(): array {
        // Define a regra de unicidade para o CPF.
        // Se for uma atualização (método PUT/PATCH), ele ignora o CPF do funcionário atual.
        $cpfRule = 'unique:employees,cpf';
        if ($this->method() === 'PUT' || $this->method() === 'PATCH') {
            $employeeId = $this->route('employee')->id;
            $cpfRule .= ',' . $employeeId;
        }

        return [
            'name' => 'required|string|max:255',
            'cpf' => "required|string|digits:11|{$cpfRule}", // O CPF deve ser único e validado.
            'birth_date' => 'required|date', 
            'phone' => 'required|string|regex:/^[0-9]+$/|min:10|max:11',
            'gender' => 'required|string', 
        ];
    }
}
