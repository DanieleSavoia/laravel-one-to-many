<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function posts()
    {
        // hasMany si usa sul model della tabella che NON ha la chiave esterna in una relazione uno a molti
        // hasOone si usa sul model della tabella che NON ha la chiave esterna in una relazione uno a uno
        return $this->hasMany(Post::class);
    }
}
