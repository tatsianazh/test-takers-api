<?php

namespace App\Http\Controllers;

use App\Interfaces\LoadSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestTakersController extends Controller
{
    public function index() {

//        $users = Http::get('http://localhost/api/json')->json();

//        dd($users);

        return view('testtakers');
    }

//    public function getJson(Request $request) :array {
//
//        $url = 'http://localhost/api/csv';
//        $response = file_get_contents($url);
//        return json_decode($response, true);
//
////        return response()->json($newsData);
//
//    }
}
