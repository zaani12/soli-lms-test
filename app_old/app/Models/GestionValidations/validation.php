<?php

namespace App\Models\GestionValidations;
use App\Models\GestionValidations\Niveau;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    protected $fillable = ['note'];

    public function Niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}
