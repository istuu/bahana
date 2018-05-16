<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * request index
     * @return string html
     */
    public function index()
    {
        return view('frontend.contents.news');
    }
}
