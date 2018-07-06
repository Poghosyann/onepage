<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
class ServiceController extends Controller
{
    public function execute() {

        if(view()->exists('admin.service')) {

            $services = Service::all();

            $data = [
                'title'=>'Services',
                'services'=>$services
            ];

            return view('admin.service',$data);
        }

    }
}