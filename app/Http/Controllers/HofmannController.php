<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class HofmannController extends Controller
{

    // Método para obtener la lista paginada de usuarios y los códigos desde la API, 
    // y retornar la vista con esos datos
    
    public function listTableUsers()
    {
        $response = Http::get('https://prueba.drogueriahofmann.cl/ListTableUsers');
        $data = $response->successful() ? collect($response->json()) : collect([]);

        // Obtener también los códigos desde GetUsers
        $codesResponse = Http::get('https://prueba.drogueriahofmann.cl/GetUsers');
        $codes = $codesResponse->successful() ? $codesResponse->json() : [];

        $page = request()->get('page', 1);
        $perPage = 10;

        $items = $data->slice(($page - 1) * $perPage, $perPage)->values();

        $paginated = new LengthAwarePaginator(
            $items,
            $data->count(),
            $perPage,
            $page,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );

        return view('hofmann.users', [
            'users' => $paginated,
            'codes' => $codes
        ]);
    }

    // Método para recibir datos del formulario, enviarlos a la API y manejar la respuesta,
    // mostrando mensajes de éxito o error según el estatus recibido

    public function sendUser(Request $request)
    {
        $payload = [
            'id'     => $request->input('id'),
            'code'   => $request->input('code'),
            'amount' => (int) $request->input('amount'),
            'date'   => $request->input('date'),
            'github' => $request->input('github'),
        ];

        $response = Http::post('https://prueba.drogueriahofmann.cl/SendUser', $payload);

        if ($response->status() === 200) {
            return redirect()->back()->with('success', 'Usuario enviado correctamente (200 OK)');
        } else {
            return redirect()->back()->with('error', 'Error al enviar usuario. Código: ' . $response->status());
        }
    }

}


