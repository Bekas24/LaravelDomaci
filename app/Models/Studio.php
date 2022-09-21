<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucitelj;
class Studio extends Model
{
    use HasFactory;

protected $fillable=[
    'naziv_studija',
    'lokacija',
    'grad',
    'broj_clanova'
];

    public function ucitelji(){
        return $this->hasMany(Ucitelj::class);
    }
}
