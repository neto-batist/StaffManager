<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;

class EmployeeController extends Controller {
    /**
     * Exibe uma lista de todos os funcionários.
     */
    public function index()
    {
        $employees = Employee::all();
        // Esta linha será usada no Passo 5 para carregar a view
        return view('employees.index', compact('employees'));
    }

    /**
     * Mostra o formulário para criar um novo funcionário.
     */
    public function create()
    {
        // Esta linha será usada no Passo 5 para carregar a view
        return view('employees.create');
    }

    /**
     * Armazena um novo funcionário no banco de dados.
     */
    public function store(StoreEmployeeRequest $request)
    {
        // A validação é feita automaticamente pelo StoreEmployeeRequest
        Employee::create($request->validated());

        return redirect()->route('employees.index')
                         ->with('success', 'Funcionário criado com sucesso.');
    }

    /**
     * Mostra o formulário para editar um funcionário existente.
     */
    public function edit(Employee $employee)
    {
        // Esta linha será usada no Passo 5 para carregar a view
        return view('employees.edit', compact('employee'));
    }

    /**
     * Atualiza um funcionário específico no banco de dados.
     */
    public function update(StoreEmployeeRequest $request, Employee $employee)
    {
        // A validação é feita automaticamente pelo StoreEmployeeRequest
        $employee->update($request->validated());

        return redirect()->route('employees.index')
                         ->with('success', 'Funcionário atualizado com sucesso.');
    }

    /**
     * Remove um funcionário específico do banco de dados.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Funcionário excluído com sucesso.');
    }
}
