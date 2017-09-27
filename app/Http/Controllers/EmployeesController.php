<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index()
    {
        if(!empty(session()->get('idUser'))){
            return view('funcionario');
        } else {
            return redirect('login');
        }
    }


    public function store(Request $request)
    {
        // Retornando todos os dados do funcionario de id = $request->id
        $data = $request->all();
        dd($data);
        $funcionario = new Funcionario;
        $funcionario->setIdFuncionario(session()->get('idUser'));
        return Response::json($funcionario->getFuncionario());
    }

    public function dependentes(Request $request){
        $funcionario = new Funcionario;
        $funcionario->setIdFuncionario(session()->get('idUser'));
        return Response::json($funcionario->getDependentes());
    }

    public function logoutFuncionario(Request $request){
        $funcionario = new Funcionario;
        return Response::json($funcionario->getLogoutFuncionario());
    }


    public function showAll() {
        // Paginação Criada = url?page=n
        $funcionario = new Funcionario;
        return Response::json($funcionario->getAllFuncionarios());
    }

}
