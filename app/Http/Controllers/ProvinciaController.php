<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Provincia\StoreRequest;
use App\Http\Requests\Provincia\UpdateRequest;

class ProvinciaController extends BaseController
{
    //Recupera todos los registros
    public function index(){
        $List = Provincia::all();
        return $this->sendResponse($List, "LISTA DE REGISTROS");
    }
    //Recuperar un registro por id
    public function show($id){
        $result = Provincia::where('id',$id)->first();
        return $this->sendResponse($result, $result?"REGISTRO RECUPERADO":"REGISTRO NO ENCONTRADO");
    }

    //Edita un registro por id
    public function update(UpdateRequest $request, $id){
        $result = Provincia::where('id',$id)->update($request->all());
        $result = $result?Provincia::where('id',$id)->first():null;
        return $this->sendResponse($result, $result?"REGISTRO EDITADO":"REGISTRO NO ENCONTRADO");
    }

    //Elimina un registro por id    
    public function destroy($id){
        $result = Provincia::where('id',$id)->delete();
        return $this->sendResponse($result,$result?"REGISTRO ELIMINADO":"REGISTRO NO ELIMINADO");
    }

    //Crear un un registro
    public function store(StoreRequest $request){
        $result = Provincia::create($request->all());
        return $this->sendResponse($result, $result?"REGISTRO CREADO":"REGISTRO NO CREADO");
    }
}
