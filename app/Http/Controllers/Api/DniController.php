<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApiRequest;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Return_;

class DniController extends Controller
{
    public function __invoke(StoreApiRequest $request)
    {
        $response = [
            "nombres" => "NICK BRIAM",
            "apellidoPaterno" => "JIMENEZ",
            "apellidoMaterno" => "BACA",
            "nombreCompleto" => "JIMENEZ BACA NICK BRIAM",
            "tipoDocumento" => "1",
            "numeroDocumento" => $request->dni_S,
            "digitoVerificador" => "9"
        ];

        return view('public.enroll', compact('response'));
        /*
        $token = 'apis-token-17309.FdycbK2X1BBKPYb84ytsULJWKKx52h1q';
        $url = "https://api.apis.net.pe/v2/reniec/dni?numero={$request->dni_S}";

        $response = Http::withToken($token)
            ->get($url);
        if ($response->successful()) {
            // if ( El usuario es admi )
            // {
            //     return redirect()->route('private matriculados formualrio completo');
            // }
            // return redirect()->route('publico matriculados formualrio completo', "")
            return view('public.enroll', compact('response'));
        }
        return response()->json(['error' => 'DNI no encontrado o error al consultar'], 404);
        */
    }
}
