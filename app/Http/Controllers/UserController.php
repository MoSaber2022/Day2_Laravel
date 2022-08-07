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
        return view('users.show' ) ;
        
    }
    function store(Request $request){


        return ' store data is done';
        
    }
    function edit($id ){
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
        return view('users.edit' , ['id' => $id , "users" => $users ]) ;
        
    }
    function update($id){
        
        return "update is working" ;
        
    }
    function destroy($id){
        
        return "destroy  is done" ;


    }
}
