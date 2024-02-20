<?php

namespace App\Http\Livewire;

use App\Models\Livre;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        //$post = Post::orderBy('created_at', 'desc')->paginate(12);
        //$li = Livre::orderBy('created_at', 'desc')->paginate(6);
        $livre = Livre::all(); 
        return view('livewire.home-component', ['livre'=>$livre])->layout('layouts.template');
    }
}
