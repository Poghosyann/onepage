<?php

namespace App\Http\Controllers;
use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function execute(){
        $peoples = People::all();
        if(view()->exists('admin.peoples')){
            $data=[
                'title'=>'Peoples',
                'peoples'=>$peoples
            ];
            return view('admin.peoples',$data);
        }
    }
}
