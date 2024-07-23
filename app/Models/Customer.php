<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Customer extends Model
{
    use SoftDeletes;
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'description',
    ];
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'customer_id', 'id');
    }
}