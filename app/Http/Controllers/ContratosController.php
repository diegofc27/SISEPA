<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;
use App\Estimacion;
use App\Constructora;
use App\Pivot_Contrato_Estimacion;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$relacion = Pivot_Contrato_Estimacion::all();
        $constructoras = Constructora::all();
        $estimaciones = Estimacion::all();
        $contratos = Contrato::all();
       
        return view('contratos.index', ['contratos' => $contratos, 'estimaciones' => $estimaciones, 'constructoras' => $constructoras]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estimacion = new Estimacion();
        $constructora = new Constructora();
        $contrato = new Contrato();
        return view('contratos.create',['contrato' => $contrato, 'estimacion' => $estimacion, 'constructora' => $constructora]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $relacion = new Pivot_Contrato_Estimacion();
        $contrato = new Contrato();
        $estimacion = new Estimacion();
        $constructora = new Constructora();

        $constructora->nombre_constructoras = $request->nombre_constructoras;

        $contrato->numero = $request->numero;
        $contrato->descripcion = $request->descripcion;
        $contrato->monto = $request->monto;
        $contrato->avance_fisico = $request->avance_fisico;
        $contrato->avance_final =$request->avance_final;

        $estimacion->nombre = $request->nombre;
        $estimacion->estatus = $request->estatus;
        $estimacion->avance_fisico_estimado = $request->avance_fisico_estimado;
        $estimacion->fecha = $request->fecha;
        $estimacion->neto_pagar = $request->neto_pagar;
        $estimacion->texto = $request->texto;





        // if(Auth::check())
        // {
        //     $product->user_id = Auth::user()->id;
        // }
        // else{
        //     dd("Tienes que iniciar sesion para agregar un Producto");
        // }

        if($contrato->save() && $estimacion->save() && $constructora->save()){
            return redirect("/contratos");
        }else{
            return view("contratos.index",['contratos' => $contratos, 'estimaciones' => $estimaciones]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
