<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'phone', 
        'phone', 
        'address', 
        'status',
        'in_date_at',
        'out_date_at'
    ];
}
