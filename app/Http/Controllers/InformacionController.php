<?php

namespace App\Http\Controllers;
use App\Models\Contacto;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function formularioInfo()
    {
        return view('home.inicio');
    }
    public function guardar(Request $request)
    {
        $contacto = new Contacto();
        $contacto->name = $request->name;
        $contacto->email = $request->email;
        $contacto->phone = $request->phone;
        $contacto->message = $request->message;
        $contacto->save();

        // Redireccionar o responder con un mensaje de éxito
        return redirect()->back()->with('success', '¡La información se ha guardado correctamente!');
    }
}
