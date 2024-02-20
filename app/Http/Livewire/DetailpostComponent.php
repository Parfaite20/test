<?php

namespace App\Http\Livewire;

use App\Models\Livre;
use App\Models\Commentaire;
use Livewire\Component;


class DetailpostComponent extends Component
{
    public $livre_id;

    public function mount($livre_id)
    {
        $this->livre_id = $livre_id;
    }

    public function render() 
    {
        $lie = Livre::where('id', $this->livre_id)->first();
        //$id = $post->id;
        return view('livewire.detailpost-component', ['lie'=>$lie],)->layout('layouts.template');
    }
}
