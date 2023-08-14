<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, Notifiable;

    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'password',
    ];
    /**
     * @var string[]
     */
    public static $dataTableColumns = [
        'DT_RowIndex' => 'DT_RowIndex',
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'courses' => 'courses',
        'isEmailVerified' => 'isEmailVerified',
        'created_at' => 'created_at',
        'action' => 'action',
    ];

    /**
     * @var string[]
     */
    public static $dataTableColumnsV2 = [
        'DT_RowIndex' => 'DT_RowIndex',
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'roles' => 'courses',
        'created_at' => 'created_at',
        'action' => 'action',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $appends = [
        'image_path'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        if (!is_null($password)) {
            $this->attributes['password'] = Hash::make($password);
        }
    }

    public function getFullNameAttribute()
    {
        return $this->first_name;
    }

    public function getImagePathAttribute(): ?string
    {
        return $this->image ? asset('uploads') . '/' . optional($this->image)->image : null;
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class, 'customer_id');
    }
}
