<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        if(!empty(session()->get('idUser'))){
            return redirect('funcionario');
        } else {
            return view('login');
        }
    }

    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $login = new Login( $request->cpf );
        dd( $request->all() );
        //return Response::json($login->getMessage());
    }

    public function show($id)
    {
        return view('login');
    }

    public function edit($id)
    {
        return view('login');
    }


    public function update(Request $request, $id)
    {
        return view('login');
    }

    public function destroy($id)
    {
        return view('login');
    }
}
