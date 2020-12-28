<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgendaRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $agendas = auth()->user()->agenda;

        return view('Admin.agenda.index', compact(['agendas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $processos = auth()->user()->processo;

        return view('admin.agenda.cadastrar', compact(['processos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateAgendaRequest $request)
    {
        try {
            Agenda::create([
                'user_id' => auth()->user()->id, 
                'data' => $request->data,
                'local' => $request->local,
                'hora' => $request->hora,
                'endereco' => $request->endereco,
                'complemento' => $request->complemento,
                'numero' => $request->numero,
                'processos_id' => $request->processos_id
            ]);
    
            return redirect()->route('admin.home');
        } catch (\Throwable $th) {
            return view('admin.includes.alertcreate');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$agenda = Agenda::find($id))
        redirect()->back();
       return view('admin.agenda.detalhe',[
           'agenda' => $agenda
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $processos = auth()->user()->processo;

        if(!$agenda = Agenda::find($id))
        return redirect()->back();

        return view('admin.agenda.editar', compact('agenda', 'processos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateAgendaRequest $request, $id)
    {
        try {
            if(!$agenda = Agenda::find($id))
                return redirect()->back();

                $agenda->update($request->all());

                return redirect()->route('agenda.index');
        } catch (\Throwable $th) {
            return view('admin.includes.alertcreate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$agenda = Agenda::find($id))
        return redirect()->back();

        
        $agenda->delete();

        return redirect()->route('agenda.index');
    }
}
