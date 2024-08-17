<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function links()
    {
        $this->belongsTo(Link::class);
    }

    public function user()
    {
        $this->belongsTo(Link::class);
    }
}
