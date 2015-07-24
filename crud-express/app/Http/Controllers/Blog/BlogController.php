<?php

namespace App\Http\Controllers\Blog;

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
        $titulo = [ "titulo" => "Blog Laravel Express" ];

        $posts = [
            $post_01 = [    "post_title"      => " O homem deve explorar, e esta é a exploração em sua maior ",
                            "post_subtitle"   => " Problemas olhar poderoso pequeno de 150 milhas para cima ",
                            "post_meta"       => ' Postado por <a href="#">Bruno Damião</a> em 24 de julho de 2015</p> '
                        ],
            $post_02 = [    "post_title"      => " Eu acredito que todo ser humano tem um número finito de batimentos cardíacos. Eu não pretendo desperdiçar meu. ",
                            "post_subtitle"   => " ",
                            "post_meta"       => ' Postado por <a href="#">Bruno Damião</a> em 24 de julho de 2015</p> '
                        ],
            $post_03 = [    "post_title"      => " Ciência ainda não domina profecia ",
                            "post_subtitle"   => " Prevemos demais para o próximo ano e ainda muito pouco para os próximos dez. ",
                            "post_meta"       => ' Postado por <a href="#">Bruno Damião</a> em 24 de julho de 2015</p> '
                        ]
        ];

        
        
        // return view("blog.index", compact('posts'));
        // return view("blog.index", compact('titulo', 'posts'));
        return view("blog.index", $titulo, compact('posts') );
    }

}
