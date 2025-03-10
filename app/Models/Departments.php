<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Departments extends Model
{
    use HasFactory , AsSource ,Filterable ,Attachable ,Chartable;

    function company()
    {
        return $this->belongsTo(Companies::class);
    }
}
