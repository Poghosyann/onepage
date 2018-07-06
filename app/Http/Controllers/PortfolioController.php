<?php
namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;
class PortfolioController extends Controller
{
    public function execute(){
        $portfolio=Portfolio::all();
        if(view()->exists('admin.portfolios')){
            $data=[
                'title'=>'Portfolios',
                'portfolios'=>$portfolio
            ];
            return view('admin.portfolios',$data);
        }
    }
}