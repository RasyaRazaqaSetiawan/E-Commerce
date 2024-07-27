<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    
    protected $fillable = ['id', 'name', 'description', 'price', 'stock', 'image', 'categories_id'];
    public $timestamp = true;

    // relation to table categories
    public function categories()
    {
        return $this->belongsTo(categories::class, 'categories_id');
    }

    //delete image
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/products' . $this->gambar))) {
            return unlink(public_path('images/products' . $this->gambar));
        }
    }

}
