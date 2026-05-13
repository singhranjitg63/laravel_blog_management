<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'contant',
        'user_id',
        'categorie_id',
    ];
    public function Category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
