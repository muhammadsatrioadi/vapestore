<?php


       
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    public function cekOngkir(Request $request)
    {
        $response = Http::withHeaders([
            'key' => 'qJ1dn91Od6aeb037d042e7b1aFjst0y6'
        ])->get('https://api.rajaongkir.com/starter/cost',
        [
            'origin' => $request->origin,
            'destination' => $request->destination,
            'weight' => $request->weight,
            'courier' => 'jne'
        ]);

         dd($response->json());   
 
        return response()->json($response->json());
    }
}

?>