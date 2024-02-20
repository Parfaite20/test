<?php

namespace App\Http\Controllers\auteur;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use App\Models\Categorie;
use App\Models\Livre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$comms = Auth::user()->livres()->with('commentaires')->get()->pluck('commentaires')->flatten();
        return view('auteurs.sow', compact( 'comms'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        $user = User::all();
        return view('auteurs.create', compact('categorie', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'titre' => 'required',
            'auteur' => 'required',
            'description_pub' => 'required',
            'lien_pub' =>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Ajoutez des règles de validation selon vos besoins
            'categorie_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $livre = new Livre;

        //ajout de fichier
        $image = $request->file('image');
        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('medias', $imageName);
            $livre->image = $imageName;
        }

        $lien_pub = $request->file('lien_pub');
        if ($lien_pub) {
            $imageLien = time().'.'.$lien_pub->getClientOriginalExtension();
            $lien_pub->move('medias', $imageLien);
            $livre->lien_pub = $imageLien;
        }

        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->description_pub = $request->description_pub;
        $livre->categorie_id = $request->categorie_id;
        $livre->user_id = $request->user_id;
        $livre->soumet();
        $livre->save();

        //$this->dispatchBrowserEvent("affMessage", ["message"=>"Ajout éffectué avec succès"]);
        return redirect()->route('auteurs.create')->with('success', 'Ajout réussi, en attendant la validation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = Post::find($id);
        $livre = Livre::where('titre',$id)->first();
        $comms = Auth::user()->livres()->with('commentaires')->get()->pluck('commentaires')->flatten();
        return view('auteurs.show', compact('livre', 'comms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::all();
        $user = User::all();
        //$post = Post::findOrFail($id);
        $livre = Livre::where('titre',$id)->first();
        return view('auteurs.edit', compact('categorie', 'user', 'livre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livre = Livre::find($id);


        //ajout de fichier
        $image = $request->file('image');
        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('medias', $imageName);
            $livre->image = $imageName;
        }

        $lien_pub = $request->file('lien_pub');
        if ($lien_pub) {
            $imageLien = time().'.'.$lien_pub->getClientOriginalExtension();
            $lien_pub->move('medias', $imageLien);
            $livre->lien_pub = $imageLien;
        }

        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->description_pub = $request->description_pub;
        $livre->categorie_id = $request->categorie_id;
        $livre->user_id = $request->user_id;
        $livre->soumet();
        $livre->save();

        $livre->save();
        return redirect()->route('auteur.post')
               ->with('success', 'Mise à jour réussie !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $post = Post::findOrFail($id);
        $livre = Livre::where('titre',$id)->first();
        $livre->delete();

        return redirect()->route('auteur.post')
            ->with('success', 'Suppession réussie !');
    }
}
