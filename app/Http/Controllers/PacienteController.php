<?php

namespace App\Http\Controllers;

use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PacienteController extends Controller
{
    public function createPaciente()
    {
        return view('paciente.createPaciente');
    }

    public function savePaciente(Request $request)
    {
        $validateData = $this->validate($request, [
            'curp' => 'required|max:18|string',
            'codificacion' => 'required|string',
            'name' => 'required|string|min:5',
            'aPaterno' => 'required|string',
            'aMaterno' => 'required|string',
            'fechaNacimiento' => 'required',
            'sexo' => 'required',
            'estadoCivil' => 'required',
            'clasificacion' => 'required',
            'tipoSangre' => 'required',
            'entidadFederativa' => 'required|string',
            'lenguaIndigena' => 'required|string',
            'religion' => 'required|string',
            'nacionalidad' => 'required|string',
        ]);


        $paciente = new Paciente();
        $fecha = new Carbon($request->input('fechaNacimiento'));
        $user = Auth::user();
        $paciente->user_id = $user->id;
        $paciente->name = $request->input('name');
        $paciente->apellido_pa = $request->input('aPaterno');
        $paciente->apellido_ma = $request->input('aMaterno');
        $paciente->curp =Str::upper($request->input('curp'));
        $paciente->sexo = $request->input('sexo');
        $paciente->estado_civil = $request->input('estadoCivil');
        $paciente->clasificacion = $request->input('clasificacion');
        $paciente->tipo_sangre = $request->input('tipoSangre');
        $paciente->nacionalidad = $request->input('nacionalidad');
        $paciente->entidad_federativa = $request->input('entidadFederativa');
        $paciente->fecha_nacimiento = $fecha->toFormattedDateString();
        $paciente->lengua_indigena = $request->input('lenguaIndigena');
        $paciente->religion = $request->input('religion');

        $paciente->save();

        return redirect()->route('home')->with(array(
            'message'=>'El paciente se ha registrado correctamente'
        ));
   }
}
