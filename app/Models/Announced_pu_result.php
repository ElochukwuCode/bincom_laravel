<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announced_pu_result extends Model
{
    use HasFactory;
    // protected $table = 'announced_pu_results';
    public $timestamps = false;

    public function polling_unit()
    {
        return $this->belongsTo(Polling_unit::class);
    }

}
