<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Welcome to Laravel';
        return view('pages/index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages/about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Graphic Design']
        );
        return view('pages/services')->with($data);
    }
}
