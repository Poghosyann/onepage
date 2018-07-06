<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Service;

class ServiceEditController extends Controller
{
    public function execute(Service $service,Request $request) {

        if($request->isMethod('delete')) {
            $service->delete();
            return redirect('admin/service')->with('status','Сервис удален');
        }


        if($request->isMethod('post')) {

            $input = $request->except('_token');


            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required|max:255'
            ]);
            if ($validator->fails()) {

                return redirect()->route('serviceEdit',['service'=>$input['id']])
                    ->withErrors($validator);
            }

            $service->fill($input);
            if($service->update()) {
                return redirect('admin')->with('status', 'Service successful updated');
            }
        }
        $old = $service->toArray();
        if(view()->exists('admin.service_edit')) {

            $data = [

                'title' => 'Edit service - '.$old['name'],
                'data'  => $old
            ];

            return view('admin.service_edit',$data);
        }
    }
}