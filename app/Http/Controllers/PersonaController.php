<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['personas']=Persona::paginate(5);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosEmpleado = request()->all(); 
        $datosEmpleado = request()->except('_token');
        if($request -> hasFile('pic')){
            $datosEmpleado['pic']=$request->file('pic')->store('uploads','public');
        }
        Persona::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona=Persona::findOrFail($id);
        return view('empleado.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request() -> except(['_token','_method']); 
        if($request -> hasFile('pic')){
            $persona=Persona::findOrFail($id);
            Storage::delete('public/'.$persona->pic);
            $datosEmpleado['pic']=$request->file('pic')->store('uploads','public');
        }
        Persona::where('id','=',$id)->update($datosEmpleado);
        $persona=Persona::findOrFail($id);
        return view('empleado.edit', compact('persona'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('/empleado/');
    }
}
