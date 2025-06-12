<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CpfValidationRule;

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
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        
        
        //preparo do telefone
        $phone = preg_replace('/[^0-9]/', '', $this->phone);

        if (substr($phone, 0, 2) === '55') {
            $phone = substr($phone, 2);
        }

        //preparo do cpf
        $cpf = preg_replace('/[^0-9]/', '', $this->cpf);

        $this->merge([
            'phone' => $phone,
            'cpf' => $cpf,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {

        $cpfRule = 'unique:employees,cpf';
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $employeeId = $this->route('employee')->id;
            $cpfRule .= ',' . $employeeId;
        }

        return [
            'name' => 'required|string|max:255',

            'cpf' => [
                'required',
                'string',
                new CpfValidationRule,
                $cpfRule
            ],

            'birth_date' => 'required|date',
            'phone' => 'required|string|regex:/^[0-9]+$/|min:10|max:11', // Veja a observação abaixo
            'gender' => 'required|string',
        ];
    }
}
