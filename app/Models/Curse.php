<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curse extends Model
{
    use HasFactory;

    protected $fillable=["name",
        "nick",
        "description",
        "price",
        "image",
        "url",
        "pdf",
        "time",
        "tipe",
        "tags",
        "icon",
        "state"
        ];
    public function speciality_curse(){
        return $this->belongsTo(SpecialityCurse::class);
    }
}
