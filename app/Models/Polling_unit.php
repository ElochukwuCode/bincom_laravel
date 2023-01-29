<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling_unit extends Model
{
    use HasFactory;
    protected $table = 'polling_unit';
    public $timestamps = false;

    public function announced_pu_results()
    {
        return $this->hasMany(Announced_pu_result::class, 'polling_unit_uniqueid', 'uniqueid');
    }

}
