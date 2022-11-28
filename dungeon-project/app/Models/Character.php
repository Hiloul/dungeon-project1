<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'user_id'];

    // Méthode "raccourci" de relation
    public function user() {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function invite()
    {
        return view('personnage.invite');
    }
}