<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = ['domain_request_id', 'status'];

    public function domainRequest()
    {
        return $this->belongsTo(DomainRequest::class);
    }
    
}
