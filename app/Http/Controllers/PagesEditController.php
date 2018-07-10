<?php
namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;
use Validator;
class PagesEditController extends Controller
{
    public function execute(Page $page,Request $request){
        if($request->isMethod('delete')){
            $page->delete();
            return redirect('admin/pages')->with('status','Page successful deleted');
        }
        if($request->isMethod('post')) {
            $input = $request -> except('_token');
            $messages = [
                'required' => 'Field :attribute required',
                'unique' => 'Field :attribute must unique',
            ];
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'alias' => 'required|max:255|unique:pages,alias,'.$input['id'],
                'text' => 'required'
            ], $messages);
            if($validator->fails()){
                return redirect()->route('pagesEdit',['page'=>$input['id']])->withErrors($validator);
            }
            if($request->hasFile('images')){
                $file=$request->file('images');
                $file->move(public_path('assets/images'),$file->getClientOriginalName());
                $input['images']=$file->getClientOriginalName();
            }else{
                $input['images']=$input['old_images'];
            }
            unset($input['old_images']);
            $page->fill($input);
            if($page->update()){
                return redirect('admin/pages')->with(['status'=>'Page- '.$input['name'].' Successful Updated']);
            }
        }
        $old=$page->toArray();
        if(view()->exists('admin.pages_edit')){
            $data=[
                'title'=>'Edit page - '.$old['name'],
                'data'=>$old
            ];
            return view('admin.pages_edit',$data);
        }
    }
}