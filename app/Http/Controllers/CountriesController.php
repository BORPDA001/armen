<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class CountriesController extends Controller
{
    public function index(){
        // dd(1);
        $countries = Country::where("population", ">", 100)->get();

        return view("pages.countries.index", compact("countries"));
    }
}
