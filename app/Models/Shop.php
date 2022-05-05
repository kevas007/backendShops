<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'caisse'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
