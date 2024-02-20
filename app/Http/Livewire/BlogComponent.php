<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Livre;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {

        $categorie = Categorie::all();

        $li = Livre::orderBy('created_at', 'desc')->paginate(6);
        return view('livewire.blog-component', ['categorie'=>$categorie], ['li'=>$li])->layout('layouts.template');
    }
}
