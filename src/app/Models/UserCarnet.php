<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCarnet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'start_date',
        'end_date'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function visit() {
        return $this->hasMany(Visit::class);
    }
}
