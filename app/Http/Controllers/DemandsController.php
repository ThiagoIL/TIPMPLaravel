<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use Illuminate\Http\Request;

class DemandsController extends Controller
{
    public function index()
    {
        $demand = Demand::where('done', false)
        ->where('priority', false)
        ->orderBy('id', 'desc') // Ordenar por data de criação em ordem descendente
        ->get();

        return view('index', [
            'demands' => $demand
        ]);
    }

    public function listDone()
    {
            $demand = Demand::where('done', true)
            ->orderBy('updated_at', 'desc')
            ->get();

            return view('done', [
                'demands' => $demand
            ]);
    }

    public function priority()
    {
        $demand = Demand::where('done', false)
        ->where('priority', true)
        ->orderBy('id', 'desc')
        ->get();

        return view('priority', [
            'demands' => $demand
        ]);
    }

    public function add(Request $request)
    {
        $demand = new Demand();
        $demand->name = $request->name;
        $demand->description = $request->description;
        $demand->priority = $request->radiocheck;
        $demand->done = 0;
        $demand->save();

        if ($request->radiocheck == 1)
        {
            return redirect()->route('priority');
        }
        return redirect()->route('index');
    }

    public function delete($id)
    {
        $demand = Demand::find($id);
        $demand->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $demand = Demand::find($id);
        
        return view('update', [
            'demands' => $demand
        ]);
    }

    public function update(Request $request)
    {
        $demand = Demand::find($request->id);
        $demand->name = $request->name;
        $demand->description = $request->description;
        $demand->priority = $request->radiocheck;
        $demand->save();

        if($request->radiocheck == 1)
        {
            return redirect()->route('priority');
        }

        return redirect()->route('index');

    }

    public function runDone($id)
    {
        $demand = Demand::find($id);
        $demand->done = 1;
        $demand->save();

        return redirect()->back();
    }




}
