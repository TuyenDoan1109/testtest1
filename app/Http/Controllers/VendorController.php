<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Vendor\VendorRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Session;

class VendorController extends Controller
{
    protected $vendorRepo;
    protected $productRepo;
    public function __construct(
        VendorRepositoryInterface $vendorRepo,
        ProductRepositoryInterface $productRepo,
    )
    {
        $this->vendorRepo = $vendorRepo;
        $this->productRepo = $productRepo;
    }

    public function index(Request $request)
    {
        $this->resetSessionSearch('vendor.index');

        if ($request->confirmSearch == 1) {
            session(['keySearch' => trim($request->keySearch)]);
            return redirect(route('vendor.index'));
        }

        if ($request->confirmPerPage == 1) {
            session(['perPage' => $request->perPage]);
            return redirect(route('vendor.index'));
        }

        if ($request->confirmVendorLevel == 1) {
            session(['filter.vendorLevel' => $request->vendorLevel]);
            return redirect(route('vendor.index'));
        }

        if ($request->confirmParentVendor == 1) {
            session(['filter.parentVendor' => $request->parentVendor]);
            return redirect(route('vendor.index'));
        }

        if ($request->confirmFilterProduct == 1) {
            session(['filter.product' => $request->filterProduct]);
            return redirect(route('vendor.index'));
        }

        $dataOption = [
            'perPage' => Session::has('perPage') ? (int)Session::get('perPage') : 10,
            'with' => ['products', 'parentVendor'], 
            'orderBy' => ['id', 'desc'], 
            'keySearch' => Session::has('keySearch') ? Session::get('keySearch') : '',
            'filter' => [
                'vendorLevel' => Session::has('filter.vendorLevel') ? Session::get('filter.vendorLevel') : '',
                'parentVendor' => Session::has('filter.parentVendor') ? Session::get('filter.parentVendor') : '',
                'product' => Session::has('filter.product') ? Session::get('filter.product') : ''
            ]
        ];

        $vendors = $this->vendorRepo->paginate(
            $dataOption['perPage'], 
            $dataOption['with'], 
            $dataOption['orderBy'], 
            $dataOption['keySearch'], 
            $dataOption['filter']
        );

        $vendorLevels = $this->vendorRepo->getAllVendorLevel();

        $parentVendorIds = $this->vendorRepo->getAllParentVendorId();

        $parentVendors = $this->vendorRepo->getAllParentVendor($parentVendorIds);

        $products = $this->productRepo->getAll();

        // dd($vendors);
        return view('vendors.index', compact(
            'vendors',
            'vendorLevels',
            'parentVendors',
            'products'
        ));
    }
}
