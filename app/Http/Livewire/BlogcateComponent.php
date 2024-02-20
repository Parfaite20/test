<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Livre;
use Livewire\Component;

class BlogcateComponent extends Component
{

    public $categorie_nam;

    public function mount($categorie_nam)
    {
        $this->categorie_nam = $categorie_nam;
    }

    public function render()
    {

        $categorie = Categorie::where('id', $this->categorie_nam)->first();
        $categorie_id = $categorie->id;
        $categorie_name = $categorie->name;
        $li = Livre::where('categorie_id', $categorie_id)->orderBy('created_at', 'desc')->paginate(8);

        $categorie = Categorie::all();
        return view('livewire.blogcate-component', ['li'=>$li], ['categorie'=>$categorie], ['categorie_name'=>$categorie_name])->layout('layouts.template');
    }
}
