<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;
use Validator;
class PeopleAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $input=$request->except('_token');
            $messages=[
                'required'=>'Field :attribute required',
            ];
            $validator=Validator::make($input,[
                'name'=>'required|max:255',
                'position'=>'required|max:30',
                'images'=>'required'
            ],$messages);
            if($validator->fails()){
                return redirect()->route('peopleAdd')->withErrors($validator)->withInput();
            }
            $file=$request->file('images');
            $input['images']=$file->getClientOriginalName();
            $file->move(public_path('assets/images/team/'),$input['images']);
            $people= new people();
            $people->fill($input);
            if($people->save()){
                return redirect()->route('people')->with(['status'=>'people successful added']);
            }
        }
        if(view()->exists('admin.peoples_add')){
            $data=[
                'title'=>'New people'
            ];
            return view('admin.peoples_add',$data);
        }
    }
}
