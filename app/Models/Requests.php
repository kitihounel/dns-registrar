<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Requests extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'domain_id', // Ajoutez ici d'autres champs si nécessaires
    ];

    // Générer un UUID pour l'id avant l'insertion dans la base de données
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Générer un UUID
            if (!$model->id) {
                $model->id = Str::uuid();
            }
        });
    }
}
