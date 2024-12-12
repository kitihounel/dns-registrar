<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainRequest extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'domain_name', 'extension', 'duration', 'whois_protection'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function domain()
    {
        return $this->hasOne(Domain::class);
    }
}

