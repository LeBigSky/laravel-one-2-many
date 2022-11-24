<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'img',
        'age',
        'genre'
    ];
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
  
}
