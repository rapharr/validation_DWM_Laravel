<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;
use App\Kind;


class BookController extends Controller
{
    // Check if auth is connected
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getAllPianos() 
    {
        $pianos = Pianos::All();

     
        $pianos->load('kind');

        return view('pianos.get_all_pianos', compact('pianos'));
    }

    public function createPiano()
    {
        $Kinds = Kind::All();

        return view('pianos.create_piano', compact('kinds'));
    }

    public function storePiano(Request $request)
    {
        
        $piano = new Piano([
            'name' => $request->get('name'),
            'brand' => $request->get('brand'),
            'color' => $request->get('color'),
            'description' => $request->get('description'),
        ]);

        $piano->save();

        return redirect('/pianos')->with('success', 'Piano créé !');
    }

    public function editPiano($id)
    {
        $kinds = Kind::All();

        $piano= Piano::find($id);
        

        return view('pianos.edit_piano', compact('kinds','piano'));
    }

    public function updatePiano($id, Request $request)
    {
    
        $piano= Piano::find($id);

        $piano->name =$request->get('name');
        $piano->brand =$request->get('brand');
        $piano->color =$request->get('color');
        $piano->description =$request->get('description');
        $piano->kind_id=$request->get('kind_id');
       
        $piano->save();
        return redirect('/pianos')->with('success', 'Piano modifié avec succès!');

    }

    public function deletePiano($id)
    {
    
        $piano= Piano::find($id);

        $piano->delete ();
        
        return redirect('/pianos')->with('success', 'Piano supprimé avec succès!');

    }
}