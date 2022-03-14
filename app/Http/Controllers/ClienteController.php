<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
        'nome' => 'required',
        'telefone' => 'required',
        'cpf' => 'required',
        'placa_carro' => 'required']);
        Cliente::create($request->all());
        return redirect()->route('clientes.create')->with('mensagem', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente){
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente){
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente){
        $cliente->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'cpf' => $request->cpf,
            'placa_carro' => $request->placa_carro
        ]);

        return redirect()->route('clientes.index')->with('mensagem', 'Dados alterados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('clientes.index')->with('mensagem','Cliente excluído com sucesso.');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $finalPlaca = Cliente::where('placa_carro', 'like', '%'.$search.'%')->paginate(5);
        return view('clientes.index', ['clientes' => $finalPlaca]);
    }

}
