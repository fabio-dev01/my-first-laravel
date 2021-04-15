<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warning;

class WarningsController extends Controller
{
    public function create()
    {
    	return view('warnings/create');
    }

    public function store(Request $request)
    {
    	$warning = new Warning;
    	$warning->title = $request->title;
    	$warning->description = $request->description;
    	$warning->date = $request->date;

    	$warning->save();
    	return redirect('/')->with('msg', 'Aviso cadastrado com sucesso!');
    }
}
