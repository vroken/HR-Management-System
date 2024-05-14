<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'positions';

    protected $fillable = ['name'];

    public function absensis()
    {
        return $this->belongsToMany(Absensi::class);
    }

}
