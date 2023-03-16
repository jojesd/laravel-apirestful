<?php

namespace App\Http\Controllers;

use App\Models\contato;
use App\Models\empresa;
use Illuminate\Http\Request;

class ApiController extends Controller
{   

    //usuarios --->>>>


    public function getAllContato() {
        //busca todos Contatos
        $contato = contato::get()->toJson(JSON_PRETTY_PRINT);
        return response($contato, 200);

    }

    public function createContato(Request $request) {

        //cria  Contatos
        $contato = new contato;
        $contato->nome      = $request->nome;
        $contato->email     = $request->email;
        $contato->telefone  = $request->telefone;
        $contato->datanasc  = $request->datanasc;
        $contato->cidade    = $request->cidade;
        $contato->empresa   = $request->empresa;  
        $contato->save();
        
        return response()->json([
            "message" => "Contato Gravado com Sucesso!"
        ], 201);
    }
    public function getContato($id) {
        //busca  Contato
        if(contato::where('id', $id)->exists()){
            $contato = contato::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($contato, 200);
        } else {
            return response()->json([
            "message" => "Contato não encontrado!"
            ], 404);
            }



    }                                                       

    public function updateContato(Request $request, $id) {
        //Atualiza contato
        if(contato::where('id', $id)->exists()) {
            $contato            = contato::find($id);
            $contato->nome      = is_null($request->nome) ? $contato->nome : $request->nome;
            $contato->email     = is_null($request->email) ? $contato->email : $request->email;
            $contato->telefone  = is_null($request->telefone) ? $contato->telefone : $request->telefone;
            $contato->datanasc  = is_null($request->datanasc) ? $contato->datanasc : $request->datanasc;
            $contato->cidade    = is_null($request->cidade) ? $contato->cidade : $request->cidade;
            $contato->empresa   = is_null($request->empresa) ? $contato->empresa : $request->empresa;
            $contato->save();

            return response()->json([
                "message" => "Contato Salvo com Sucesso!"
            ], 200);
        } else {

            return response()->json([
                "message" => "Contato não encontrado!"
            ], 403); 
        }

    }
    
    public function deleteContato($id) {
        //deleta contato

        if(contato::where('id', $id)->exists()) {
            $contato = contato::find($id);
            $contato->delete();

            return response()->json([
                "message" => "Contato Deletado com Sucesso!"
            ], 202);
        } else {
            return response()->json([
                "message" => "Contato não encontrado!"
            ]);
        }
    }
        ////EMPRESASS --->

        public function getAllEmpresa() {
            //busca todos empresas
            $empresa = empresa::get()->toJson(JSON_PRETTY_PRINT);
            return response($empresa, 200);
    
        }
    
        public function createEmpresa(Request $request) {
    
            //cria  empresa
            $empresa = new empresa;
            $empresa->nome      = $request->nome;
            $empresa->cnpj      = $request->cnpj;
            $empresa->endereco  = $request->endereco;
            $empresa->usuarios  = $request->usuarios;
            $empresa->save();
            
            return response()->json([
                "message" => "Empresa Gravado com Sucesso!"
            ], 201);
        }
        public function getEmpresa($id) {
            //busca  empresa
            if(empresa::where('id', $id)->exists()){
                $empresa = empresa::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
                return response($empresa, 200);
            } else {
                return response()->json([
                "message" => "Empresa não encontrado!"
                ], 404);
                }
    
    
    
        }                                                       
    
        public function updateEmpresa(Request $request, $id) {
            //Atualiza empresa
            if(empresa::where('id', $id)->exists()) {
                $empresa            = contato::find($id);
                $empresa->nome      = is_null($request->nome) ? $empresa->nome : $request->nome;
                $empresa->cnpj      = is_null($request->email) ? $empresa->cnpj : $request->emcnpjail;
                $empresa->endereco  = is_null($request->endereco) ? $empresa->endereco : $request->endereco;
                $empresa->usuarios  = is_null($request->usuarios) ? $empresa->usuarios : $request->usuarios;
                $empresa->save();
    
                return response()->json([
                    "message" => "Empresa Salvo com Sucesso!"
                ], 200);
            } else {
    
                return response()->json([
                    "message" => "Empresa não encontrado!"
                ], 403); 
            }
    
        }
        
        public function deleteEmpresa($id) {
            //deleta Empresa
    
            if(empresa::where('id', $id)->exists()) {
                $empresa = empresa::find($id);
                $empresa->delete();
    
                return response()->json([
                    "message" => "Empresa Deletado com Sucesso!"
                ], 202);
            } else {
                return response()->json([
                    "message" => "Empresa não encontrado!"
                ]);
            }
    
    
    
            
        }

        
    }
