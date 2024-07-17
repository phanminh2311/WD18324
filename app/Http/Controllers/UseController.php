<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers(){
        $listUsers = DB::table('users')->join('phongban', 'users.phongban_id', '=', 'phongban.id')
        ->select('users.id', 'users.name', 'users.email', 'users.phongban_id', 'phongban.ten_donvi')
        ->orderBy('id', 'desc')->get();
        return view('users/listUsers')->with([
            'listUsers' => $listUsers
        ]);
    }

    public function addUsers(){
        $phongban = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('users/addUsers')->with([
            'phongban' => $phongban
        ]);
    }

    public function addPostUsers(Request $request){
        //validate
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phongban_id' => $request->phongban,
            'tuoi' => $request->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table('users')->insert($data);

        return redirect()->route('users.listUsers');
    }

    public function deleteUsers($userId){
        DB::table('users')->where('id', $userId)->delete();
        return redirect()->route('users.listUsers');
    }

    public function updateUsers($userId){
        $phongban = DB::table('phongban')->select('id', 'ten_donvi')->get();
        $user = DB::table('users')->where('id', $userId)->first();
        
        return view('users/updateUsers')->with([
            'user' => $user,
            'phongban' => $phongban
        ]);
    }

    public function updatePostUsers(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phongban_id' => $request->phongban,
            'tuoi' => $request->tuoi,
            'songaynghi' => $request->songaynghi,
            'updated_at' => Carbon::now()
        ];
        DB::table('users')->where('id', $request->idUser)->update($data);
        return redirect()->route('users.listUsers');
    }
    
}
