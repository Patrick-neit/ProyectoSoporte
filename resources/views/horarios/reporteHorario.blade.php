@extends('layouts.app', ['activePage' => 'horarios', 'titlePage' => 'horarios'])

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Registrar Horario</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card card-primary">
                            <br>
                            <form action="{{ route('horarios.store') }}" method="POST" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha">Fecha<span class="required">*</span></label>
                                            <input type="date" class="form-control  @error('fecha') is-invalid @enderror" name="fecha">
                                            @error('fecha')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hora_ingreso">Hora de Ingreso<span class="required">*</span></label>
                                            <input type="time" class="form-control  @error('hora_ingreso') is-invalid @enderror" name="hora_ingreso" >
                                            @error('hora_ingreso')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hora_entrada">Hora Entrada<span class="required">*</span></label>
                                            <input type="time" class="form-control  @error('hora_entrada') is-invalid @enderror" name="hora_entrada" >
                                            @error('hora_entrada')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hora_salida">Hora Salida<span class="required">*</span></label>
                                            <input type="time" class="form-control  @error('hora_salida') is-invalid @enderror" name="hora_salida" >
                                            @error('hora_salida')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usuario_id">Seleccione el User<span class="required">*</span></label>
                                            <div class="selectric-hide-select">
                                                <select name="usuario_id" class="form-control selectric">
                                                    @foreach($usuarios as $usuario)
                                                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>
                                    </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
