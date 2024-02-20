<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'auteur', 'description_pub', 'lien_pub', 'image', 'categorie_id', 'user_id', 'publie'];

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function soumet()
    {
        $this->publie = false;
        $this->save();
    }
}
