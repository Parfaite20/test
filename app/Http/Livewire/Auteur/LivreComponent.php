<?php

namespace App\Http\Livewire\Auteur;

use App\Models\Livre;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
class LivreComponent extends Component
{

    //use WithPagination;
    //protected $paginationTheme = "bootstrap";

    public $livre;

    public function mount()
    {
        $this->loadLivre();
    }

    public function loadLivre()
    {
        $this->livre = Livre::all();
    }

    public function publiched($id)
    {
        Livre::where('id', $id)->update(['publie'=>true]);
        $this->loadLivre();

        return redirect()->to('/auteur/post'); 
    }

    public function render()
    {
        //$user = auth()->user();
        //$post = Post::all();
        //$users = Auth::user();
        $livr = Auth::user()->livres()->paginate(6);
        //$post = Post::all();
        return view('livewire.auteur.post-component', ['livr'=>$livr])->layout('layouts.templateUser');
    }
}
