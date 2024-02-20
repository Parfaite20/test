<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Livre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index()
    {

        $livre = Livre::all();
        //$user = Auth::user();
        $comms = Auth::user()->livres()->with('commentaires')->get()->pluck('commentaires')->flatten();
        $comm = Commentaire::get();
        return view('commentes.index', compact('livre', 'comm', 'comms'));
    }

    public function store(Request $request, Livre $livre_id)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'commente' => 'required',
        ]);

        $livre_id->commentaires()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'commente'=>$request->commente,
        ]);

        return redirect()->route('detail', $livre_id)->with('message', 'Merci, votre commentaire est ajouté avec succès');
        /*$comm = new Commentaire;
        $comm->name = $request->name;
        $comm->email = $request->email;
        $comm->commente = $request->commente;
        $comm->post_id = $id->id;
        $comm->save();
        //$post->commentaires()->save($comm);

        return redirect()->route('detail', $id)->with('message', 'Merci, votre commentaire est ajouté avec succès');*/
    }

    public function show($id)
    {


    }
}
