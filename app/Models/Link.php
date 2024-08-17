<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Visit;

class Link extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function visits()
    {
        $this->hasMany(Visit::class);
    }
}
