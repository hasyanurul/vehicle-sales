<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class Motorcycle extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'motorcycle';
    protected $primaryKey = 'motorcycleId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'machine', 'suspensionType', 'transmissionType',
    ];
}
