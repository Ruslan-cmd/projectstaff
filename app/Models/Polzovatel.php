<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polzovatel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'polzovatels';
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
