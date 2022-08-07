<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Expr\Cast\Object_;

class UserController extends Controller
{
    


    function index(){

        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);

        return view('users.index', ["users" => $users]) ;
    }

    function create(){

        return view('users.create') ;
        
    }
    function show($id){
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
        $user = $users[$id-1];
        return view('users.show' , ['user' => $user] ) ;
        
    }
    function store(Request $request){

        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);

        return 'Name: '.$request['name'].'<br>'.'E-mail: '. $request['email'].'<br> stored!!!';
        
    }
    function edit($id ){
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
        return view('users.edit' , ['id' => $id , "users" => $users ]) ;
        
    }
    function update($id){
        
        return "update is working" ;
        
    }
    function destroy($id){
        
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
        $str = $users[$id]['name'];
        return " $str account is deleted " ;

    }
}
