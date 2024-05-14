<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $table = 'presence';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'absensi_id',
        'presence_date',
        'entry_time',
        'exit_time',
        'is_permission'
    ];

    public function absensi()
    {
        return $this->belongsTo(Absensi::class, 'absensi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
