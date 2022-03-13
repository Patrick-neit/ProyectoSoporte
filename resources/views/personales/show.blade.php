@extends('layouts.app', ['activePage' => 'contrato_personales', 'titlePage' => 'Contrato de Personales'])

@section('content')

@section('css')
@endsection

<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Vista detallada del contrato del usuario: {{ $user->name }}</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <a href="#">
                                <img src="public/img/contratos/reina4444.png" >
                                <h5 class="title mt-3">{{ $user->name }}</h5>
                            </a>
                            <p class="description">
                                {{ $user->apellido}} <br>
                                {{ $user->email }} <br>
                                {{ $user->zona }}
                            </p>
                        </div>
                        </p>
                        <div class="card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae
                            aliquid provident placeat.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <button class="btn btn-sm btn-primary">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card user-->
            <div class="col-lg-12">
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <tbody>
                            {{-- <tr>
                                <th>Foto</th>
                                <td><img src="/img/contratos/{{$user->foto}}" alt=""></td>
                            </tr> --}}
                            <tr>
                                <th>Codigo</th>
                                <td>{{ $user->codigo }}</td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{!! $user->email !!}</td>
                            </tr>

                            <tr>
                                <th>Estado Usuario</th>
                                @if ($user->estado == 1)
                                    <td>
                                        <div class="badge badge-success">Activo</div>
                                    </td>
                                @endif
                                @if ($user->estado == 0)
                                    <td>
                                        <div class="badge badge-danger">Inactivo</div>
                                    </td>
                                @endif
                            </tr>
                            <tr>
                                <th>Fecha Nacimiento</th>
                                <td>{!! $user->fecha_nacimiento !!}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button-container ">
                        <a href="{{ route('personales.index') }}" class="btn btn-warning  btn-twitter mr-2"> Volver
                        </a>
                        {{-- <a href="{{ route('personales.edit', $producto->id) }}" class="btn btn-info btn-twitter"> Editar </a> --}}
                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>
</section>




@endsection
