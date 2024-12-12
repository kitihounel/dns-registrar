<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'extension', 'duration', 'whois_protection', 'active', 'request_id'];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}

