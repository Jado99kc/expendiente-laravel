@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Curp</th>
                <th scope="col">Sexo</th>
                <th scope="col">Estado Civil</th>
                <th scope="col">Tipo Sangre</th>
                <th scope="col">Nacionalidad</th>
                <th scope="col">Entidad Federativa</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Religion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->name}}</td>
                    <td>{{$paciente->apellido_pa}}</td>
                    <td>{{$paciente->apellido_ma}}</td>
                    <td>{{$paciente->curp}}</td>
                    <td>{{$paciente->sexo}}</td>
                    <td>{{$paciente->estado_civil}}</td>
                    <td>{{$paciente->tipo_sangre}}</td>
                    <td>{{$paciente->nacionalidad}}</td>
                    <td>{{$paciente->entidad_federativa}}</td>
                    <td>{{$paciente->fecha_nacimiento}}</td>
                    <td>{{$paciente->religion}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$pacientes->links()}}
    </div>

@endsection
