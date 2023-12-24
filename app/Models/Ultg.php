<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ultg extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Gardu_induk()
    {
        return $this->belongsTo(Gardu_induk::class);
    }
}
