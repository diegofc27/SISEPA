

{!! Form::open(['url' => $url, 'method' => $method ]) !!}

  <div class="form-group">
    {{ Form::text('numero',$contrato->numero,['class' => 'form-control', 'placeholder' => 'numero de contrato'])  }}
  </div>

  <div class="form-group">
    {{ Form::text('nombre_constructoras',$constructora->nombre_constructoras,['class' => 'form-control', 'placeholder' => 'nombre de la constructora'])  }}
  </div>

  <div class="form-group">
    {{ Form::textarea('descripcion',$contrato->descripcion,['class' => 'form-control', 'placeholder' => 'descripcion de contrato'])  }}
  </div>

  <div class="form-group">
    {{ Form::number('monto',$contrato->monto,['class' => 'form-control', 'placeholder' => 'monto de contrato'])  }}
  </div>

  <div class="form-group">
    {{ Form::number('avance_fisico',$contrato->avance_fisico,['class' => 'form-control', 'placeholder' => 'avance fisico de contrato'])  }}
  </div>
  
  <div class="form-group">
    {{ Form::number('avance_final',$contrato->avance_final,['class' => 'form-control', 'placeholder' => 'avance final de contrato'])  }}
  </div>
  <hr>
  <h2>Estimaciones</h2>
  <div class="form-group">
    {{ Form::text('nombre',$estimacion->nombre,['class' => 'form-control', 'placeholder' => 'nombre de estimacion'])  }}
  </div>

  {{-- AGREGAR FECHA Y ENUM --}}
  <div class="form-group">
    {{ Form::select('estatus',['pagado' => 'pagado', 'no pagado' => 'no pagado'], 'no pagado',['class' => 'form-control', 'super-border']) }}

  </div>

  <div class="form-group">
    {{  Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::number('avance_fisico_estimado',$estimacion->avance_fisico_estimado,['class' => 'form-control', 'placeholder' => 'avance fisico estimado'])  }}
  </div>

  <div class="form-group">
    {{ Form::number('neto_pagar',$estimacion->neto_pagar,['class' => 'form-control', 'placeholder' => 'neto a pagar'])  }}
  </div>

  
  <hr>
  <h2>Notificaciones</h2>
  <div class="form-group">
    {{ Form::textarea('texto',$estimacion->texto,['class' => 'form-control', 'placeholder' => 'notificaciones'])  }}
  </div>

  <div class="form-group text-right">
    <a href="{{url('/contratos')}}"> Regresar al listado de contratos </a>
    <input type="submit" value="Enviar" class="btn btn-success">
  </div>

{!! Form::close() !!}