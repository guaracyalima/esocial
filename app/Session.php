<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function criarSessao($idUser) {
        session()->put('idUser', $idUser);
    }

    public function destruirSessao() {
        session()->forget('idUser');
    }
}
