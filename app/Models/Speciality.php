<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable=["name",
        "nick",
        "description",
        "number",
        "price",
        "image",
        "url",
        "icon",
        "state"];

    public function speciality_curse(){
        return $this->belongsTo(SpecialityCurse::class,'cod');
    }
}
