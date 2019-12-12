<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departamento;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Departamento\StoreRequest;
use App\Http\Requests\Departamento\UpdateRequest;

class DepartamentoController extends BaseController
{
     //Recupera todos los registros
     public function index(){
        $List = Departamento::all();
        return $this->sendResponse($List, "LISTA DE REGISTROS");
    }
    //Recuperar un registro por id
    public function show($id){
        $result = Departamento::where('id',$id)->first();
        return $this->sendResponse($result, $result?"REGISTRO RECUPERADO":"REGISTRO NO ENCONTRADO");
    }

    //Edita un registro por id
    public function update(UpdateRequest $request, $id){
        $result = Departamento::where('id',$id)->update($request->all());
        $result = $result?Departamento::where('id',$id)->first():null;
        return $this->sendResponse($result, $result?"REGISTRO EDITADO":"REGISTRO NO ENCONTRADO");
    }

    //Elimina un registro por id    
    public function destroy($id){
        $result = Departamento::where('id',$id)->delete();
        return $this->sendResponse($result,$result?"REGISTRO ELIMINADO":"REGISTRO NO ELIMINADO");
    }

    //Crear un un registro
    public function store(StoreRequest $request){
        $result = Departamento::create($request->all());
        return $this->sendResponse($result, $result?"REGISTRO CREADO":"REGISTRO NO CREADO");
    }
}
