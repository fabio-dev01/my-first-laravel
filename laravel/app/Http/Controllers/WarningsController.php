<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warning;
use App\User;

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

        $user = auth()->user();  //dá acesso ao usuário logado
        $warning->user_id = $user->id;

    	$warning->save();
    	return redirect('/')->with('msg', 'Aviso cadastrado com sucesso!');
    }

    public function show($id)
    {
        $warning = Warning::findOrFail($id);

        $warningOwner = User::where('id', $warning->user_id)->first()->toArray();

        return view('warnings.show', ['warning' => $warning, 'warningOwner' => $warningOwner]);
    }
}
