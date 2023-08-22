<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'announcement_no',
        'for',
        'subject',
        'content',
        'content_table',
        'announce_contacts',
        'links'
    ];

}