<?php

namespace App\Repositories\Vendor;

use App\Repositories\BaseRepositoryInterface;

interface VendorRepositoryInterface extends BaseRepositoryInterface
{
    public function paginate(
        int $perPage = 10,
        array $with = [], 
        array $orderBy = ['id', 'desc'], 
        string $keySearch = '',
        array $filter = []
    );

    public function getAllVendorLevel();
    public function getAllParentVendorId();
    public function getAllParentVendor(array $arrIds);
}
