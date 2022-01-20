<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'fullname',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the practices for the User.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function practices()
    {
        return $this->hasMany(Practice::class);
    }

    /**
     * Get the opinions for the User.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opinions(){
        return $this->hasMany(Opinion::class);
    }

    /**
     * Get the role that owns user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the opinion that owns user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function opinion()
    {
        return $this->belongsTo(Opinion::class);
    }

    /**
     * Return default role.
     * @return Role
     */
    static function defaultRole(): Role
    {
        return Role::where('slug', 'MBR')->first();
    }

    /**
     * Check if authentificated user is moderator
     * @return bool
     */
    public function isModerator() :bool
    {
        return Auth::user()->role->slug === 'MOD';
    }


}
