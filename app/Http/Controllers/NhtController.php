<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhtController extends Controller
{
    public function showInfo(Request $request)
    {
        
        $information = [
            [
                'name' => 'Nguyễn Huyền Trang',
                'birth' => '19/10/2004',
                'home' => 'Hoàng Hoa Thám, Ba Đình, Hà Nội',
                'email' => 'Nhtrang191004@gmail.com',
                'phone' => '0397183920'
            ]
        ];
        return view('info', compact('information'));

    }
}
