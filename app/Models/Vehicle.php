<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class Vehicle extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'vehicle';
    protected $primaryKey = 'vehicleId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'color', 'price', 'yearRelease',
    ];
}
