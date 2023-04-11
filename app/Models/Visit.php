<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'animal_id',
        'date',
        'diagnosis',
        'meds'
    ];

    public function client(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function patient(){
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
