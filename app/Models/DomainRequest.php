<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainRequest extends Model
{
    use HasFactory;

    // Propriétés autorisées pour l'insertion en masse
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'address',
        'domain_name',
        'extension',
        'duration',
        'whois_protection',
    ];
}
