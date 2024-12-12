<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'full_name', 
        'email', 
        'phone_number', 
        'address',
    ];
    
    // Définition de la relation avec les demandes
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}


// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Customer extends Model
// {
//     use HasFactory;

       
//     protected $fillable = [
//     'id',
//     'full_name',
//     'email',
//     'phone_number',
//     'address',
// ];
// }
