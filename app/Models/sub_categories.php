<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_categories extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';

    protected $fillable = ['id', 'categories_id', 'name'];
    public $timestamp = true;

    // relation to table categories
    public function categories()
    {
        return $this->belongsTo(categories::class, 'categories_id');
    }
}
