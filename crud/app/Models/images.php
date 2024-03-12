<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $fillabele =
    ['product_id',
     'image',
    ];

    
    public function product()
{
    return $this->belongsTo(Product::class);
}
}


