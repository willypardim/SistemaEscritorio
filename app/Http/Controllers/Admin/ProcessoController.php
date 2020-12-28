<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProcessoRequest;
use App\Models\Processo;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
        $processos = auth()->user()->processo;

        return view('Admin.processo.index', compact(['processos']));
    }
    public function cadastrar()
    {
        return view('admin.processo.cadastrar');
    }

    public function processoStore(StoreUpdateProcessoRequest $request)
    {
        Processo::create([
            'user_id' => auth()->user()->id, 
            'number' => $request->number,
            'tituloprocesso' => $request->tituloprocesso,
            'date' => $request->date,
            'parteinteressada' => $request->parteinteressada,
            'parteprocessada' => $request->parteprocessada,
            'descricao' => $request->descricao,
            'relatorio' => $request->relatorio,
            'comentario' => $request->comentario
        ]);

        return redirect()->route('admin.processo');
    }
    
    public function detalhe($id)
    {
        if(!$processo = Processo::find($id))
        redirect()->back();
       return view('admin.processo.detalhe',[
           'processo' => $processo
       ]);
    }

    public function apagar($id)
    {
        try {
            if(!$processo = Processo::find($id))
            return redirect()->back();
            $processo->delete();

            return redirect()->route('admin.processo');
        } catch (\Throwable $th) {
            return view('admin.includes.alertcaution');
        }
        
    }

    public function editar($id)
    {
        if(!$processo = Processo::find($id))
        return redirect()->back();

        return view('admin.processo.editar', compact('processo'));
    }

    public function update(StoreUpdateProcessoRequest $request, $id)
    {
        if(!$processo = Processo::find($id))
        return redirect()->back();

        $processo->update($request->all());

        return redirect()->route('admin.processo');
    }

    public function selecionar()
    {
        $processos = auth()->user()->processo;

        return view('Admin.agenda.teste', compact(['processos']));
    }
}
