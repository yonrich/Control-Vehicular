<?php

namespace App\Http\Controllers\ControlVehicular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehiculo;

class ControlVehicularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::where('status',1)->get();
        return view("control-vehicular.index",compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas= Vehiculo::pluck('marca','marca');
        $submarca= Vehiculo::pluck('submarca','submarca');
        return view("control-vehicular.create",compact('marcas','submarca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vehiculo = new Vehiculo();
        $vehiculo->vehiculo = $request->vehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->submarca = $request->submarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->serie = $request->serie;
        $vehiculo->placas = $request->placas;
        $vehiculo->seguro = $request->seguro;
        $vehiculo->status = 1;
        $vehiculo->save();

        return redirect()->route('control-vehicular.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::where('id',$id)->first();
        $marcas= Vehiculo::pluck('marca','marca');
        $submarca= Vehiculo::pluck('submarca','submarca');
        return view("control-vehicular.edit",compact('vehiculo','marcas','submarca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $vehiculo = Vehiculo::where('id',$request->id)->first();
        $vehiculo->vehiculo = $request->vehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->submarca = $request->submarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->serie = $request->serie;
        $vehiculo->placas = $request->placas;
        $vehiculo->seguro = $request->seguro;
        $vehiculo->save();
        return redirect()->route('control-vehicular.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd("Hola mundo");
        $vehiculo = Vehiculo::where('id',$id)->first();
        $vehiculo->status = 0;
        $vehiculo->save();

        return redirect()->route('control-vehicular.index');
    }
}
