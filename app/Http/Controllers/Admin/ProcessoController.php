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

    public function processoStore(Request $request)
    {
        Processo::create([
            'user_id' => auth()->user()->id, 
            'number' => $request->number,
            'name' => $request->name,
            'client' => $request->client,
            'date' => $request->date
        ]);
       //auth()->user()->id;
        
        /*$data = $request->only(['number', 'name', 'client', 'date']);
        Processo::create($data);*/

        return redirect()->route('admin.processo');
    }
    
    public function detalhe($id)
    {
        //$processo = Processo::where('id', $id)->first();

        if(!$processo = Processo::find($id))
        redirect()->back();
       return view('admin.processo.detalhe',[
           'processo' => $processo
       ]);
    }

    public function apagar($id)
    {
        if(!$processo = Processo::find($id))
        return redirect()->back();

        
        $processo->delete();

        return redirect()->route('admin.processo');
    }

    
}
