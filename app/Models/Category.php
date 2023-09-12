<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name', 'slug'
    ];

    // dari slaggable composser untuk otomatis mengisi table slug di database
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
