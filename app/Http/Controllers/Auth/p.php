<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function serviceIndex(){
        $services = Service::all();
        return View('fronts.servicefront', compact('services'));

    }

    public function newsIndex(){
        //$services = Service::all();
        //return View('fronts.servicefront', compact('services'));
        $news = News::all();
        return View('fronts.newsfront', compact('news'));
    }
}


