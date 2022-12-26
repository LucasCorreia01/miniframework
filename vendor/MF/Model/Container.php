<?php

namespace MF\Model;
use App\Connection;

class Container {

    public static function getModel($model){

        $class = "App\\Models\\".ucfirst($model);
        //retonar o modelo solicitado já instânciado, inclusive com a conexao estabelcida

        $conn = Connection::getDb();
        return new $class($conn);
    }
}