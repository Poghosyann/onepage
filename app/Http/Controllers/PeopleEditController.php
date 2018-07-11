<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\People;
class PeopleEditController extends Controller
{
    protected function execute(people $people,Request $request){
        $opt=$people->toArray();
        if($request->isMethod('delete')){
            $people->delete();
            return redirect( 'admin/people')->with('status','people deleted');
        }
        if($request->isMethod('post')){
            $input=$request->except('_token');
            $messages=[
                'required'=>'Field :attribute required',
            ];
            $validator=Validator::make($input,[
                'name'=>'required|max:255',
                'position'=>'required|max:20',
            ],$messages);
            if($validator->fails()){
                return redirect()->route('peopleEdit',['people'=>$input['id']])->withErrors($validator)->withInput();
            }
            if($request->hasFile('images')){
                $file=$request->file('images');
                $input['images']=$file->getClientOriginalName();
                $file->move(public_path('assets/images/team/'),$input['images']);
            }else{
                $input['images']=$input['old_images'];
            }
            $people->update( $input);
            if($people->save()){
                return redirect()->route('admin/people')->with(['status'=>'people successful updated']);
            }
        }
        if(view()->exists('admin.peoples_edit')){
            $data=[
                'title'=>'Edit people - ' . $people->name,
                'data'=>$opt
            ];
            return view('admin.peoples_edit',$data);
        }
    }
}
