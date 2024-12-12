<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;


class Domain extends Model
{
    use HasFactory;

    // Ajouter 'status' à la propriété $fillable
    protected $fillable = [
        'domain_name',
        'extension',
        'duration',
        'whois_protection',
        'customer_id',
        'request_id',
        'status',  // Ajoutez 'status' ici
    ];
    
    // Définition de la relation avec Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Définition de la relation avec Request
    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}