<?php

namespace App;

class SemResposta implements IResposta
{

    public function responde(Requisicao $req, Conta $conta)
    {
        return '';
    }

    public function setProxima(IResposta $resposta)
    {
    }
}