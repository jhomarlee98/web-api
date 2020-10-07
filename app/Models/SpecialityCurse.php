<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialityCurse extends Model
{
    use HasFactory;
    protected $fillable=[
        "cod_curse",
        "cod_speciality"
    ];

    public function curses(){
        return $this->belongsToMany(Curse::class,'curses','cod_curse');
    }
    public function specialities(){
        return $this->belongsToMany(Speciality::class,'specialities','cod_speciality');
    }
}
