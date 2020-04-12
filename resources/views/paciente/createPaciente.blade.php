@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('savePaciente')}}" method="post">
            @csrf
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="datosGenerales">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <div class="defaultMargin">
                        <div class="form-row">
                            <div class="col">
                                <label for="numeroExpediente">No. Expediente</label>
                                <input type="text" name="numeroExpediente" id="numeroExpediente"
                                       class="form-control"
                                       disabled>
                            </div>
                            <div class="col">
                                <label for="curp">CURP</label>
                                <input maxlength="18" type="text" name="curp" id="curp" style="text-transform: uppercase" class="form-control">
                            </div>
                            <div class="col">
                                <label for="codificacion">Folio de identificacion</label>
                                <input type="text" name="codificacion" id="codificacion" class="form-control">
                            </div>
                            <div class="col">
                                <label for="fechaRegistro">Fecha de Registro</label>
                                <input type="text" disabled name="fechaRegistro" id="fechaRegistro"
                                       class="form-control">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="name">Nombres</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col">
                                <label for="aPaterno">Apellido Paterno</label>
                                <input type="text" name="aPaterno" id="aPaterno" class="form-control">
                            </div>
                            <div class="col">
                                <label for="aMaterno">Apellido Materno</label>
                                <input type="text" name="aMaterno" id="aMaterno" class="form-control">
                            </div>
                            <div class="col">
                                <label for="fechaNacimiento">Fecha de Nacimeinto</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" class="form-control" id="sexo">
                                    <option value="H">Masculino</option>
                                    <option value="M">Femenino</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="estadoCivil">Estado Civil</label>
                                <select name="estadoCivil" class="form-control" id="estadoCivil">
                                    <option value="soltero">Soltero(a)</option>
                                    <option value="casado">Casado(a)</option>
                                    <option value="divorciado">Divorciado(a)</option>
                                    <option value="separado">Separado(a)</option>
                                    <option value="union libre">Union libre</option>
                                    <option value="viudo">Viudo(a)</option>
                                    <option value="otro">Otro</option>
                                    <option value="null">Se Ignora</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="clasificacion">Clasificacion</label>
                                <select name="clasificacion" class="form-control" id="clasificacion">
                                    <option value="no clasificado">No Clasificado</option>
                                    <option value="privado">Paciente privado del consultorio</option>
                                    <option value="paciente empresa">Paciente de empresas</option>
                                    <option value="paciente protocolo">Paciente de protocolo 1</option>
                                    <option value="paciente protocolo 2">Paciente de protocolo 2 prueba</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="tipoSangre">Tipo de Sangre</label>
                                <select name="tipoSangre" class="form-control" id="tipoSangre">
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="nacionalidad">Nacionalidad</label>
                                <input type="text" name="nacionalidad" id="nacionalidad" class="form-control">
                            </div>
                            <div class="col">
                                <label for="entidadFederativa">Entidad Federativa</label>
                                <input type="text" name="entidadFederativa" id="entidadFederativa"
                                       class="form-control">
                            </div>
                            <div class="col">
                                <label for="lenguaIndigena">Lengua Indigena</label>
                                <input type="text" name="lenguaIndigena" id="lenguaIndigena" class="form-control">
                            </div>
                            <div class="col">
                                <label for="religion">Religion</label>
                                <input type="text" name="religion" id="religion" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
