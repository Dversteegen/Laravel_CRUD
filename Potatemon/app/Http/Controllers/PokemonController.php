<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){
        $pokemon = Pokemon::all();                
        return view ('home', ['pokemon' => $pokemon]);        
    }

    public function create(){        
        return view ('create');
    }

    public function save(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'typeOne' =>'required',
            'typeTwo' => 'nullable',            
            'description' => 'required',
            'region' => 'required',
        ]);

        $newPokemon = Pokemon::create($data);

        return redirect(route('home'));        
    }

    public function edit(Pokemon $pokemon){        
        return view('edit', ['pokemon'=>$pokemon]);
    }

    public function update(Pokemon $pokemon, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'typeOne' =>'required',
            'typeTwo' => 'nullable',            
            'description' => 'required',
            'region' => 'required',
        ]);

        $pokemon->update($data);

        return redirect(route('home'))->with('success', 'Pokemon updated successfully');
    }

    public function delete(Pokemon $pokemon){
        $pokemon->delete();
        return redirect(route('home'))->with('success', 'Pokemon deleted successfully');
    }
}
