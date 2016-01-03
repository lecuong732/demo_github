<?php namespace app\Http\Controllers;
    /**
     * Created by PhpStorm.
     * User: Admin
     * Date: 12/11/2015
     * Time: 23:40 PM
     */
    class WecomeController extends Controller {
        public function showinfo() {
            echo 'Học lập trinh laravel 5.1';
        }

        public function test_controller() {
            echo 'đây là action của class WecomeController';
            return redirect()->route('hcm'); //trên url sẽ tự động chuyển đế ho_chi_minh
        }
    }
