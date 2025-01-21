<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone1',
        'phone2',
        'address',
        'logo',
        'website',
        'description',
        'fax',
        'tax_number',
        'country',
        'city',
        'state',
        'status',
    ];
}
