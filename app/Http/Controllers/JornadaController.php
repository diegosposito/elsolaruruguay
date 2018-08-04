<?php

namespace GestionJornadas\Http\Controllers;

use Illuminate\Http\Request;

use GestionJornadas\Jornada;

class JornadaController extends Controller
{
    public function index()
    {
        $jornadas = Jornada::latest()->paginate(10);
        return view('jornadas.index',compact('jornadas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jornadas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'profesion' => 'required',
            'localidad' => 'required',
            'importe' => 'required',
            'esta_pago' => 'required',
        ]);
        Jornada::create($request->all());
        return redirect()->route('jornadas.index')
                        ->with('success','Registro ingresado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jornada $jornada)
    {
        return view('jornadas.show',compact('jornada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornada $jornada)
    {
        return view('jornadas.edit',compact('jornada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Jornada $jornada)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'profesion' => 'required',
            'localidad' => 'required',
            'importe' => 'required',
            'esta_pago' => 'required',
        ]);
        $jornada->update($request->all());
        return redirect()->route('jornadas.index')
                        ->with('success','Registro actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jornada::destroy($id);
        return redirect()->route('jornadas.index')
                        ->with('success','Registro borrado exitosamente!');
    }
}
