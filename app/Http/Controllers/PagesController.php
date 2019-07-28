<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work',
            'Go to the concert',
        ];
        $title = 'Vikram\'s';
    
        //return view('welcome')->withTasks($tasks)->withTitle($title);
        return view('welcome')->with(['tasks' => $tasks,
                                      'title' => $title]);
    }
    public function about() {    
        //return view('welcome')->withTasks($tasks)->withTitle($title);
        return view('about');
    }

    public function contact() {    
        //return view('welcome')->withTasks($tasks)->withTitle($title);
        return view('contact');
    }    
}
