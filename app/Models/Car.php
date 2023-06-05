<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class Car extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'car';
    protected $primaryKey = 'carId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'machine', 'passengerCapacity', 'type',
    ];
}
