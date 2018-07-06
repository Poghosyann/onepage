<?php
namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;
use Validator;
class PortfolioAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $input=$request->except('_token');
            $messages=[
                'required'=>'Field :attribute required',
            ];
            $validator=Validator::make($input,[
                'name'=>'required|max:255',
                'filter'=>'required|max:20',
                'images'=>'required'
            ],$messages);
            if($validator->fails()){
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }
            $file=$request->file('images');
            $input['images']=$file->getClientOriginalName();
            $file->move(public_path('assets/images/portfolio/'),$input['images']);
            $portfolio= new Portfolio();
            $portfolio->fill($input);
            if($portfolio->save()){
                return redirect()->route('portfolio')->with(['status'=>'Portfolio successful added']);
            }
        }
        if(view()->exists('admin.portfolios_add')){
            $data=[
                'title'=>'New Portfolio'
            ];
            return view('admin.portfolios_add',$data);
        }
    }
}