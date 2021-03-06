<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
   
    public function index()
    {
        $news = News::latest()->paginate(5);
    
        return view('news.show',compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('news.create');
    }
     
    
}
