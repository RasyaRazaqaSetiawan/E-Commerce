<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    
    protected $fillable = ['id', 'name', 'description', 'image'];
    public $timestamp = true;

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    //delete image
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/categories' . $this->gambar))) {
            return unlink(public_path('images/categories' . $this->gambar));
        }
    }
}
