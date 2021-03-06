<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;

use DB;

class IndexController extends Controller
{
    public function execute(Request $request){
        $pages = Page::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $peoples = People::all();

        $tags = DB::table('portfolios')->distinct()->pluck('filter');
        $menu = array();

        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu,$item);
        }

        $item = array('title' => 'Service', 'alias' => 'service');
        array_push($menu,$item);

        $item = array('title' => 'Team', 'alias' => 'team');
        array_push($menu,$item);

        $item = array('title' => 'Portfolio', 'alias' => 'work');
        array_push($menu,$item);

        $item = array('title' => 'Contact', 'alias' => 'contact');
        array_push($menu,$item);

        return view('site.index', array(

            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
            'portfolios' => $portfolios,
            'peoples' => $peoples,
            'tags' => $tags

        ));
    }
}
