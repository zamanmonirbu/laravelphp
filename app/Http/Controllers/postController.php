<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function index(){
        $data['post']= DB::table('post')->get() ;
        //dd($data);
        return view('post/index',$data);
    }
    public function show($id){
        $data['post']= DB::table('post')-> where('id',$id)->first()  ;
        //dd($data);
        return view();
    }
     
    public function create(){
        return view('post.create');
    }
         public function store(Request $request)
    {
        $data['title']=$request->title;
        $data['details']=$request->details;
        
        DB::table('post')->insert($data);
        //dd(DB::table('post')->get());
        return redirect('post/index');
    }
        
    
}