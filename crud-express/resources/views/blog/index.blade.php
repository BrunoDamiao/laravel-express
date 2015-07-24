@extends('template')
	
@section('title')
	{{ $titulo }}
@stop

@section('banner')
	<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Laravel Express</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop


@section('content')
	
	<div class="row">
     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
         
		{{-- $titulo --}}

		@foreach($posts as $k => $p )
	        {{-- var_dump($p) --}}
	        {{-- $p["post_title"] --}}
	        <div class="post-preview">	     

				<a href="#">
					<h2 class="post-title">
	                    {{ $p["post_title"] }}
	                </h2>
	                <h3 class="post-subtitle">
	                    {{ $p["post_subtitle"] }}
	                </h3>
                </a>

                <p class="post-meta">{!! $p["post_meta"] !!}</p>
	        </div>
	        <hr>
	   @endforeach

	 <!--   <div class="post-preview">
	            <a href="post.html">
	                 <h2 class="post-title">
	                     Man must explore, and this is exploration at its greatest
	                 </h2>
	                 <h3 class="post-subtitle">
	                     Problems look mighty small from 150 miles up
	                 </h3>
	            </a>
	            <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
	        </div> -->


         	
         <!-- <hr> -->
         <!-- Pager -->
         <ul class="pager">
             <li class="next">
                 <a href="#">Older Posts &rarr;</a>
             </li>
         </ul>
     </div>
 	</div> 

@stop