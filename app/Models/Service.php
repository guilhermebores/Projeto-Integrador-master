<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'description',
        'arrival_date',
        'delivery_date',
        'is_delivered', // se você tiver esse campo
    ];
}
