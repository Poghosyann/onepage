<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Validator;

class ServiceAddController extends Controller
{
    public function execute(Request $request) {

        if($request->isMethod('post')) {
            $input = $request->except('_token');



            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required'
            ]);
            if ($validator->fails()) {

                return redirect()->route('serviceAdd')
                    ->withErrors($validator)
                    ->withInput();
            }

            $service = new Service();
            // Page::unguard();
            $service->fill($input);
            if($service->save()) {
                return redirect('admin.service')->with('status', 'Service successful added');
            }
        }

        if(view()->exists('admin.service_add')) {

            $data = [

                'title' => 'New service'

            ];
            return view('admin.service_add',$data);
        }
    }
}