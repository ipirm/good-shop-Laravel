<?php

namespace App\Http\Controllers;

use App\Buildings;
use App\Cat;
use App\Certificate;
use App\Designs;
use App\Earth;
use App\Geo;
use App\Mail\SendMail;
use App\Legal;
use App\Main;
use App\Price;
use App\Service;
use App\Work;
use Mail;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $erths = Earth::all();
        $geos = Geo::all();
        $descs = Designs::all();
        $buildings = Buildings::all();
        $legals = Legal::all();
        $services = Service::all();
        $main = Main::first();
        $cetificate = Certificate::first();
        $cats = Cat::all();
        $price = Price::first();
        $works = Work::all();
        return
            view('index',
                compact('erths','geos','main','cetificate','buildings','legals','services','cats','price','descs','works'));
    }

    public function mail(Request $request)
    {
        Mail::to('ilham.pirm@gmail.com')->send(new SendMail($request));
        Mail::to('testingu856@gmail.com')->send(new SendMail($request));
        Mail::to('vc.dzk@ukr.net')->send(new SendMail($request));
        return dd('Success');
    }

    public function name(){
        return view('new');
    }
}
