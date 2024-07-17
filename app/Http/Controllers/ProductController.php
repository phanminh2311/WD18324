<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProduct(){
        // $products = [
        //     [
        //         'id'    => '1',
        //         'name'  => 'iphone 14'
        //     ],
        //     [
        //         'id'    => '2',
        //         'name'  => 'iphone 15'
        //     ],
        // ];
        // return view('list-product')->with([
        //     'products'  => $products
        // ]);
        
        // 1.Lấy danh sách toàn bộ user
        $result = DB::table('users')->get();
        dd($result);

        // 2.Lấy thông tin user có id = 4
        // $result = DB::table('users')
            // ->where('id','=', '4')
            // ->first();
        // $result = DB::table('users')->find('4');
        // dd($result);

        // 3.Lấy thuộc tính 'name' của user có id = 16
        // $result = DB::table('users')
            // ->where('id', '=', '16')
            // ->value('name'); 
        // dd($result);

        // 4.Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');
        // $result = DB::table('users')
        //     ->where('phongban_id', '=', $idPhongBan)
        //     ->pluck('id');
        // dd($result);

        // 5.Tìm user có độ tuổi lớn nhất trong công ty
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users') ->max('tuoi'))
        //     ->get();
        // dd($result);

        // 6.Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users') ->min('tuoi'))
        //     ->get();
        // dd($result);

        // 7.Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban giám hiệu')
        //     ->value('id');
        // $result = DB::table('users')
        //     ->where('phongban_id', '=', $idPhongBan)
        //     ->count();
        // dd($result);

        // 8.Lấy danh sách tuổi các user
        // $result = DB::table('users')
        //     ->distinct()->pluck('tuoi');
        // dd($result);
        
        // 9.Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')
        //     ->where('name', 'like', '%Khải')
        //     ->orwhere('name','like', '%Thanh')
        //     ->get();
        // dd($result);

        // 10.Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban đào tạo')
        //     ->value('id');
        // $result = DB::table('users')
        //     ->where('phongban_id', '=', $idPhongBan)
        //     ->select('id', 'name', 'email', 'songaynghi', 'tuoi')
        //     ->get();
        // dd($result);

        // 11.Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')
        //     ->where('tuoi', '>=', '30')
        //     ->orderBy('tuoi', 'asc')
        //     ->get();
        // dd($result);

        // 12.Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')
        //     ->orderBy('tuoi', 'desc')
        //     ->offset(5)
        //     ->limit(10)
        //     ->get();
        // dd($result);

        // 13.Thêm một user mới vào công ty
        // $data = [
        //     'name' => 'Hoàng Quốc Kiệu',
        //     'email' => 'canhhdph3105@fpt.edu.vn',
        //     'phongban_id' => '1',
        //     'songaynghi' => '10',
        //     'tuoi' => '24',
        //     'created_at' => '2001-01-26',
        //     'updated_at' => '2024-06-28'
        // ];
        // DB::table('users')->insert($data);

        // 14.Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban đào tạo')
        //     ->value('id');
        // $listuser = DB::table()

        // 15.Xóa user nghỉ quá 15 ngày
        // DB::table('users')
        //     ->where('songaynghi', '>', '15')
        //     ->delete();
    }

    public function getProduct($id){
        echo $id;
    }

    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;

    }
}