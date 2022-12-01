<?php

namespace App\Http\Controllers;
use App\Models\Chamado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadosController extends Controller
{
    public function index(Request $request)
    {
        $chamados = Chamado::query()->orderBy('created_at')->get();

        return view('chamados.index')->with('chamados', $chamados);

    }

    public function create()
    {
        return view('chamados.create');
    }

    public function store(Request $request)
    {
        $nomeCliente = $request->input('nome');
        $emailCliente = $request->input('email');
        $celularlCliente = $request->input('celular');
        $problemaCliente = $request->input('problema');
        $chamado = new Chamado();
        $chamado->nome = $nomeCliente;
        $chamado->email = $emailCliente;
        $chamado->celular = $celularlCliente;
        $chamado->problema = $problemaCliente;
        $chamado->save();

        return redirect('/chamados');





        /* $emailCliente = $request->input('email');
        $celularCliente = $request->input('celular');
        $problemaCliente = $request->input('problema');
        $acaolCliente = $request->input('acao');
       */


    }

}
