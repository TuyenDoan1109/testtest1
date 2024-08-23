<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Vendor extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'vendor_product')->withPivot('price');
    }

    public function parentVendor()
    {
        return $this->belongsTo(Vendor::class, 'parent_id', 'id');
    }
}
