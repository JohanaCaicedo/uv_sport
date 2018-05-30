<?php

namespace uv_sport\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

    public function importIntegrantes(Request $request)
    {
        /** El método load permite cargar el archivo definido como primer parámetro */
        $file = $request->file('excel');
       $fileName = $file->getClientOriginalName(); 
       $fileExtension = $file->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($fileName, \File::get($file));
       $fileRoute = storage_path("archivos")."/".$fileName;
        \Excel::load($fileRoute, function ($reader) {
            /**
             * $reader->get() nos permite obtener todas las filas de nuestro archivo
             */
            foreach ($reader->get() as $key => $row) {
                $integrante = [
                    'id' => $row['id'],
                    'codigo' => $row['codigo'],
                    'plan' => $row['plan'],
                    'nombre' => $row['nombre'],
                    'apellido' => $row['apellido'],
                ];

                /** Una vez obtenido los datos de la fila procedemos a registrarlos */
                if (!empty($integrante)) {
                    DB::table('integrantes')->insert($integrante);
                }
            }

            echo 'Los integrantes han sido importados exitosamente';
        });

    }}
    
