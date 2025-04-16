<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function index() {

        return view('pages.master');
    }
    function home() {

        return view('pages.home');
    }
    function about() {

        return view('pages.about');
    
    }
    function service() {

        return view('pages.service');
    
    }
    function contact() {

        return view('pages.contact'); 
    
    }
    function contactpost(Request $request) {

        dd($request);
    
    }
 

}
