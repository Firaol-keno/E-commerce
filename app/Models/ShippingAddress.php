<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'email', 'phone', 'company', 'state', 'zip_code', 'country', 'address1', 'address2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
