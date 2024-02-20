<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'commente', 'livre_id'];

    public function livres()
    {
        return $this->belongsTo(Livre::class, 'livre_id');
    }
}
