<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>testtest1 | products</title>
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
                    <div class="card-header">
                        <select name="" id="">
                            <option value="">10</option>
                            <option value="">20</option>
                        </select>
                        <input type="text" placeholder="tìm kiếm...">
                        <select name="" id="">
                            <option value="">--chọn cấp đại lý--</option>
                        </select>
                        <select name="" id="">
                            <option value="">--chọn đại lý cha--</option>
                        </select>

                        <select name="" id="">
                            <option value="">--chọn sản phẩm--</option>
                        </select>
                        <select name="" id="">
                            <option value="">---Sắp xếp theo---</option>
                        </select>
                        <a href="{{ route('vendor.index') }}" class="btn btn-sm btn-primary">Vendors</a>
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
                                    <th>Doanh thu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>