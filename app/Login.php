<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    private $retorno = [];

    private $cpf;

    public function __construct($cpf){
        $this->cpf = $cpf;
        $this->verificarCPF();

        return $this->retorno;
    }

    private function verificarCPF() {

        $cpf = $this->cpf;

        if(is_numeric($cpf)){

            $funcionario = Login::where("CPF_COMPLETO", ''.$cpf.'')->first();

            if(!empty($funcionario->CPF_COMPLETO)) {
                $sessao = new Sessao; // Criar Sessão
                $sessao->criarSessao($funcionario->ID_FUNCIONARIO);

                if(!empty(session()->get('idUser'))) {
                    $this->retornaId(session()->get('idUser'));
                }
            }else {
                $this->retorno = ['valid' => false, 'message' => 'CPF não encontrado!'];
            }
        } else {
            $this->retorno = ['valid' => false, 'message' => 'CPF inválido, digite somente números!'];
        }

    }

    private function retornaId($id) {
        $this->retorno = ['valid' => true, 'message' => " "];
    }

    public function getMessage(){
        return $this->retorno;
    }

}
