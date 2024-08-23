<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>testtest1 | vendors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .conatiner {
            max-width: 1140px;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-around">

                        <form id="perPageForm" action="{{ route('vendor.perPage') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="confirmPerPage">
                            <select name="perPage" id="perPage">
                                @for($i = 10; $i <= 50; $i += 5)
                                    <option value="{{ $i }}"
                                        @if(session('perPage') == $i)
                                            selected
                                        @endif
                                    >
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </form>
                        
                        <form action="{{ route('vendor.search') }}" method="post" id="searchForm">
                            @csrf
                            <input type="hidden" value="1" name="confirmSearch">
                            <input type="text" value="{{ session('keySearch') }}" id="keySearch" name="keySearch" placeholder="tìm kiếm...">
                        </form>

                        <form action="{{ route('vendor.filterVendorLevel') }}" id="vendorLevelForm" method="post">
                            @csrf
                            <input type="hidden" name="confirmVendorLevel" value="1">
                            <select name="vendorLevel" id="vendorLevel">
                                <option value="">--chọn cấp đại lý--</option>
                                @foreach($vendorLevels as $vendorLevel)
                                <option 
                                value="{{ $vendorLevel->level }}"
                                @if(session('filter.vendorLevel') == $vendorLevel->level)
                                    selected
                                @endif
                                >
                                    Đại lý cấp {{ $vendorLevel->level }}
                                </option>
                                @endforeach
                            </select>
                        </form>
                        
                        <form action="{{ route('vendor.filterParentVendor') }}" id="parentVendorForm" method="post">
                            @csrf
                            <input type="hidden" value="1" name="confirmParentVendor">
                            <select name="parentVendor" id="parentVendor">
                                <option value="">--chọn đại lý cha--</option>
                                @foreach($parentVendors as $parentVendor)
                                    <option
                                        value="{{ $parentVendor->id }}"
                                        @if(session('filter.parentVendor') == $parentVendor->id)
                                            selected
                                        @endif
                                    >
                                        {{ $parentVendor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                        
                        <form action="{{ route('vendor.filterProduct') }}" id="filterProductForm" method="post">
                            @csrf
                            <input type="hidden" name="confirmFilterProduct" value="1">
                            <select name="filterProduct" id="filterProduct">
                                <option value="">--chọn sản phẩm--</option>
                                @foreach($products as $product)
                                    <option 
                                    value="{{ $product->id }}"
                                    @if(session('filter.product') == $product->id)
                                        selected
                                    @endif
                                    >{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </form>
                        
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">products</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Đại lý</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Cấp Đại lý</th>
                                    <th>Đại lý cha</th>
                                    <th>Tỷ lệ lợi nhuận</th>
                                    <th>Lợi nhuận</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vendors as $vendor)
                                    <tr>
                                        <th>{{ $vendor->id }}</th>
                                        <td>{{ $vendor->name }}</td>
                                        <td>{{ $vendor->phone }}</td>
                                        <td>{{ $vendor->address }}</td>
                                        <td class="text-center">{{ $vendor->level }}</td>
                                        <td class="text-center">{{ $vendor->parentVendor->name ?? '' }}</td>
                                        <td class="text-center">{{ $vendor->interest_rate * 100}} %</td>
                                        <td class="text-center">{{ number_format($vendor->products_sum_vendor_productprice * $vendor->interest_rate) }} VNĐ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                Showing {{ $vendors->firstItem() }} to {{ $vendors->lastItem() }} of {{ $vendors->total() }} entries
                            </div>
                            <div>
                                {{ $vendors->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function($) {
            "use strict";
            var DT = {}; 

            DT.getPerPage = () => {
                $(document).on('change', '#perPage', function(){
                    $('#perPageForm').submit();          
                });
            };

            DT.getSearch = () => {
                $(document).on('blur', '#keySearch', function(){
                    $('#searchForm').submit();          
                });
            };

            DT.getVendorLevel = () => {
                $(document).on('change', '#vendorLevel', function(){
                    $('#vendorLevelForm').submit();          
                });
            };

            DT.getParentVendor = () => {
                $(document).on('change', '#parentVendor', function(){
                    $('#parentVendorForm').submit();          
                });
            };

            DT.getProduct = () => {
                $(document).on('change', '#filterProduct', function(){
                    $('#filterProductForm').submit();          
                });
            };

            $(document).ready(function(){
                DT.getPerPage();
                DT.getSearch();
                DT.getVendorLevel();
                DT.getParentVendor();
                DT.getProduct();
            });

        })(jQuery);
    </script>
</body>
</html>