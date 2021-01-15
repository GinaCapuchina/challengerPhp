<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;
use function Sodium\add;

class DeveloperController extends Controller
{

    public function __construct()
    {
        $this->middleware('developer');
    }

    public function create()
    {
        return view('apps.create');

    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validatedata = $request->validate([
            'nombre' => 'required|min:5|max:30|unique:apps',
            'categoria' => 'required|min:5|max:30',
            'precio' => 'required'

        ]);

        $app = new App();
        $app->nombre = $validatedata['nombre'];
        $app->categoria = $validatedata['categoria'];
        $app->precio = $validatedata['precio'];
        $app->save(); //INSERT

        $status = 'Tu aplicacion ha sido guardada exitosamente';
        return back()->with(compact('status'));

    }

    public function edit(App $app)
    {
        return view('apps.edit', compact('app'));
    }

    public function update(Request $request, App $app)
    {
        //dd($request->all());
        $validatedata = $request->validate([
            'precio' => 'required'

        ]);

        $app->precio = $validatedata['precio'];
        $app->save(); //INSERT

        $status = 'Tu aplicacion ha sido editada exitosamente';
        return back()->with(compact('status'));

    }



}
