<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory, \Illuminate\Auth\Authenticatable;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'phone_number',
        'avatar',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
    // Mutator to hash password before saving to the database
}
