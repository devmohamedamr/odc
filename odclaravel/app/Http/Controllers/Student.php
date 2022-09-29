<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student extends Controller
{

    public function index(){
       $students =   DB::table("student")->get();
         return view("student.index",compact("students"));
    }
    // show form create
    public function create(){
        return view("student.create");
    }

    // handel request for create
    public function store(Request $request){
         $request->validate([
            "name"=>"required|min:2",
            "email"=>"required|unique:student,email",
            "phone"=>"required|min:1|max:10"
         ]);

         DB::table("student")->insert([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone
         ]);

         return redirect("student/index");
    }

    // delete
    public function delete($id){
        DB::table("student")->delete($id);
        return redirect("student/index");
    }
    // show student by id
    public function edit($id){
      $student =  DB::table("student")->where("id",$id)->first();
        return view("student/edit",compact("student"));
    }

    public function update(Request $request){
        $request->validate([
            "name"=>"required|min:2",
            "email"=>"required|unique:student,email",
            "phone"=>"required|min:1|max:10"
         ]);

         DB::table("student")->where('id',$request->id)->update([
            "name"=>$request->name,
            "email"=> $request->email,
            "phone"=>$request->phone
         ]);

         return redirect("student/index");
    }
}
