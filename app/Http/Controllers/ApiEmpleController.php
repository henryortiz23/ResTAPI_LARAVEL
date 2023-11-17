<?php

namespace App\Http\Controllers;

use App\Models\ModelApiEmple;

use Illuminate\Http\Request;

class ApiEmpleController extends Controller
{

    public function show(string $id){
    
    }

    public function update(Request $request, string $id){
    
    }


    public function create(Request $request)
    {
        $data = $request->json()->all();
    
        if (empty($data)) 
        {
            return response()->json(['message' => 'No se proporcionaron datos'], 400);
        }

         // Valida los datos de entrada
        $request->validate([
                'nombres' => 'required|max:100',
                'apellidos' => 'required|max:100',
                'fechanac' => 'required|max:100',
                'correo' => 'nullable|email|max:100',
                'foto' => 'nullable|image',
            ]);
   
            // Crea un nuevo objeto Empleado con los datos proporcionados
            $empleado = new ModelApiEmple();
            $empleado->nombres = $data['nombres'];
            $empleado->apellidos = $data['apellidos'];
            $empleado->fechanac = $data['fechanac'];
            $empleado->correo = $data['correo'];
    //        $empleado->foto = $data['foto'];

            if (isset($data['foto'])) {
                // Procesa la imagen si está presente en los datos
                // Almacenar la imagen en el servidor y guardar el nombre en la base de datos
            }

            // Guarda el objeto en la base de datos
            $empleado->save();
            
                // Retorna una respuesta JSON
            return response()->json(['message' => 'Empleado creado con éxito'], 200);
    }

    public function index(){
        //Recuoera todos los registros 
        $apiData = ModelApiEmple::all();

        //Retorna los datos en formato JSON
        return response()->json($apiData);
    }
}
 