<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Incidente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\IncidenteResource;

class IncidenteController extends Controller
{
    public function index()
    {
        return IncidenteResource::collection(Incidente::orderBy('id', 'DESC')->get());
    }

    public function store(Request $request)
    {
        try
        {
            $incidente = $request->all();

            if ($request->has('Archivo'))
            {
                $incidente['Archivo'] = $this->imagen($request->Archivo);
            }

            Incidente::create($incidente);
            return response()->json([
                'res' => true,
                'message' =>'Registro creado Correctamente'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error al crear el registro',
                'e' => $e
            ],400);
        }

    }

    public function show(Incidente $incidente)
    {
        return new IncidenteResource($incidente);
    }

    public function update(Request $request, Incidente $incidente)
    {
        try
        {
            $datos = $request->all();

            if ($request->has('Archivo'))
            {
                $incidente['Archivo'] = $this->Archivo($request->Archivo);
            }

            $incidente->update($datos);
            return response()->json([
                'res' => true,
                'message' =>'Registro actualizado Correctamente'
            ],200);
        }
        catch (Exception $e) {
            return response()->json([
                'res' => false,
                'message' =>'Error al actualizar el registro'
            ],400);
        }
    }

    public function destroy(Incidente $incidente)
    {
        try
        {
            $incidente->delete();

            return response()->json([
                'message' => 'Success'
            ]);
        }
        catch (Exception $e) {
            return response()->json([
                'res' => false,
                'message' =>'Error al eliminar el registro'
            ],400);
        }
    }

    private function imagen($file)
    {
        $nombrearchivo = time().".".$file->getClientOriginalExtension();
        $file->move(public_path('imagenes'), $nombrearchivo);
        return "/imagenes/".$nombrearchivo;
    }

    public function totalIncidentes()
    {
        $incidentes = DB::table('incidente')
             ->select(DB::raw('count(*) as totalIncidentes'))

             ->get();

             return $incidentes;
    }

    public function sinresolverIncidentes()
    {
        $incidentes = DB::table('incidente')
             ->select(DB::raw('count(*) as sinresolverIncidentes'))
             ->whereIn('Id_Status', [1, 2,3,4,5])

             ->get();

             return $incidentes;
    }

    public function resueltosIncidentes()
    {
        $incidentes = DB::table('incidente')
             ->select(DB::raw('count(*) as resueltosIncidentes'))
             ->where('Id_Status', '=', 7)

             ->get();

             return $incidentes;
    }

    public function deldiaIncidentes()
    {
        $incidentes = DB::table('incidente')
             ->select(DB::raw('count(*) as deldiaIncidentes'))
             ->whereDate('created_at', DB::raw('curdate()'))

             ->get();

             return $incidentes;
    }

    public function RequeriminetoServicio()
    {
        return IncidenteResource::collection(Incidente::orderBy('id', 'DESC')->get()->where('id_problema', 5));
    }
}
