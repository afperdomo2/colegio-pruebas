<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function scopeStatus($query, int $status)
    {
        return $query->where('is_active', $status);
    }
}
