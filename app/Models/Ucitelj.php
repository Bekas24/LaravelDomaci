<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studio;
use App\Models\Clan;
class Ucitelj extends Model
{
    use HasFactory;
    protected $fillable =[
        'ime',
        'prezime',
        'primanja',
        'edukacija',
        'studio_id'
    ];
    public function studio(){
        return $this->belongsTo(Studio::class);
    }
    public function clanovi(){
        return $this->hasMany(Clan::class); 
    }
}
