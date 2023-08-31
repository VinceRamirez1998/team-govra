<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'examination_advisory_no',
        'to',
        'subject',
        'content',
        'links',    
        
    ];
}