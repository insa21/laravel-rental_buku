<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'book_code', 'title', 'cover', 'slug'
    ];

    // dari slaggable composser untuk otomatis mengisi table slug di database
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
