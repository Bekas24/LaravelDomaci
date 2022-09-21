<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucitelj;
class Clan extends Model
{
    use HasFactory;
    public function ucitelj(){
        return $this->belongsTo(Ucitelj::class);
    }
}
