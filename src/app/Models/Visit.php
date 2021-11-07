<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_carnet_id',
        'entry_date'
    ];

    public function userCarnet() {
        return $this->belongsTo(UserCarnet::class);
    }
}
