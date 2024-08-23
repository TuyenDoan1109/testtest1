<?php

namespace App\Repositories\Vendor;

use App\Repositories\BaseRepository;
use App\Models\Vendor;

class VendorRepository extends BaseRepository implements VendorRepositoryInterface
{
    public function getModel()
    {
        return Vendor::class;
    }

    public function paginate(
        int $perPage = 10,
        array $with = [], 
        array $orderBy = ['id', 'desc'], 
        string $keySearch = '',
        array $filter = []
    ) 
    {
        $productId = $filter['product'] ?? '';
        return $this->model::query()
            ->withSum(['products' => function($query) use ($productId) {
                $query->when($productId, function($q) use ($productId) {
                    $q->where('product_id', $productId);
                });
            }], 'vendor_product.price')
            ->when(!empty($keySearch), function($q) use ($keySearch){
                $q->where(function($sub) use ($keySearch){
                    $sub->where('name', 'like', '%' . $keySearch . '%')
                    ->orWhere('phone', 'like', '%' . $keySearch . '%')
                    ->orWhere('address', 'like', '%' . $keySearch . '%');
                });
            })
            
            ->when(($filter['parentVendor'] != ''), function($q) use ($filter){
                $q->where('parent_id', $filter['parentVendor']);
            })
            ->when(!empty($filter['vendorLevel']), function($q) use ($filter){
                $q->where('level', $filter['vendorLevel']);
            })
            ->orderBy($orderBy[0], $orderBy[1])
            ->paginate($perPage);
    }

    public function getAllVendorLevel()
    {
        return $this->model::select('level')->groupBy('level')->get();
    }

    public function getAllParentVendorId()
    {
        return $this->model::select('parent_id')->groupBy('parent_id')->pluck('parent_id')->toArray();
    }

    public function getAllParentVendor(array $arrIds)
    {
        return $this->model::whereIn('id', $arrIds)->orderBy('level')->get();
    }

}


