<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role_id',
        'position_id',
        'employee_id',
        'date_of_birth',
        'jenis_kelamin',
        'alamat',
        'joining_date',
        'gaji',
        'employee_status',
        'emergency_contact',
        'gambar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function positions()
    {
        return $this->belongsTo(Jabatan::class, 'position_id');
    }

    public function presences()
    {
        return $this->hasMany(Presence::class, 'user_id', 'id');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

}
