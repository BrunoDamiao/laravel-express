<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = [
            $post_01 = [    "post_title"      => "Man must explore, and this is exploration at its greatest",
                            "post_subtitle"   => " Problems look mighty small from 150 miles up ",
                            "post_meta"       => ' Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p> '
                        ],
            $post_02 = [    "post_title"      => "Man must explore, and this is exploration at its greatest",
                            "post_subtitle"   => " Problems look mighty small from 150 miles up ",
                            "post_meta"       => ' Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p> '
                        ]
        ];
        
        return view("blog.index", compact('posts'));
    }

}
