<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Contacts;
use App\Http\Requests\TestRequest;

class TestController extends Controller
{
    public function register(TestRequest $request){
        $information=$request->only(['name', 'email', 'password']);
        Users::create($information);
        return redirect()->route('login');
    }

    public function login(TestRequest $request){
        return view('confirm');
    }

    public function admin(){
        $datas=Contacts::Paginate(7);
        return view('confirm',compact('datas'));
    }

    public function question(){
        return view('question');
    }

    public function quest(Request $request){
        $test=$request->only(['first_name','last_name','gender','email','one','two','three','address','building','category_id','detail']);
        return view('question-c', ['test'=>$test]);
    }

    public function thank(Request $request){
        $telone=$request->only(['one']);
        $teltwo=$request->only(['two']);
        $telthree=$request->only(['three']);

        $tel=$telone . $teltwo . $telthree;
    }
}
