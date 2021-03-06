<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $primaryKey='product_id';
    protected $fillable=
        [
            'name_product','price','description','create_date','fk_category_id'
        ];
    use HasFactory;
}
