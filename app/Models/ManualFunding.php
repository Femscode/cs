<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualFunding extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'manual_fundings';
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
