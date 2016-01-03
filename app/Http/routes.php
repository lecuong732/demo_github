<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('thongtin', 'WecomeController@showinfo');
    Route::get('demo/base', function() {
        return 'demo laravel 5.1';
    });
    Route::match(['get', 'post'], 'multipleHttp', function () {
        echo 'chao mung ban den voi laravel 5.1';
    });
    Route::get('hoten/{hoten}/{thoigian}', function($hoten, $thoigian) {
        echo "tên của bạn là: $hoten lúc $thoigian (chuyền dữ liệu dộng từ url)";
    });
    Route::get('mon-an/{ten_mon_an?}', function($ten_mon_an = 'thịt gà') {
        return $ten_mon_an;
    });
    Route::get('thongtin/{hoten}/{sodienthoai}', function($hoten, $sodienthoai) {
        return "thông tin của bạn là: $hoten có số điện thoại là: $sodienthoai";
    })->where(['hoten'=>'[a-zA-Z]+', 'sodienthoai'=>'\d{1,10}']);
    Route::get('call_view', function() {
        $hoten = 'Cường đẹp trai';
        $view = 'Admin';
        return view('view', compact('hoten', 'view'));
    });
    Route::get('test_controller', 'WecomeController@test_controller');
    //tạo định danh
    Route::get('ho_chi_minh', ['as'=>'hcm', function() { // định danh hcm chỉ được sử dụng trong form, route, controller chuyển hướng trang chứ không được sử dụng trê url
        return 'Hồ Chí Minh Đẹp Nhất Tên Người';
    }]);
    Route::group(['prefix'=>'thuc_don'], function() {
        Route::get('bun_bo', function() {
            return 'Đây là trang bún bò';
        });
        Route::get('bun_mam', function() {
            return 'Đây là trang bún mắm';
        });
        Route::get('bun_moc', function() {
            return 'Đây là trang bún mộc';
        });
    });
    Route::get('goi_view', function() {
        return view('lay_out.view');
    });
    View::share('title','view::share');
    Route::get('goi_layout', function() {
        return view('lay_out.lay_out');
    });
    View::composer(['lay_out.lay_out','lay_out.view'], function($view) {
        return $view->with('thongtin','Đây là trang cá nhân'); // là biến với tham số nào đó
    });
    Route::get('check_view', function() { // kiểm tra sự tồn tại của một view
        if(view()->exists('lay_out.lay_out')) {
            return 'Tồn Tại View';
        } else {
            return 'Không Tồn Tại View';
        }
    });
    Route::get('goi_master', function() {
        return view('views.layout');
    });
    Route::get('url/full', function() {
        return URL::full();
    });
    Route::get('url/asset', function() {
        //return URL::asset('css/mystyle.css'); //dùng laravel 4
        return asset('css/mystyle.css', TRUE); //dùng laravel 5 // TRUE là để chuyển từ http -> https
    });
    Route::get('url/to', function() {
        return URL::to('thongtin', ['LeVanCuong', '0123456789'], TRUE);
    });
    Route::get('url/secure', function() {
        return secure_url('thongtin', ['LeVanCuong', '0123456789']); // có thể dùng TRUE hoặc dùng hàm secure_url
    });
