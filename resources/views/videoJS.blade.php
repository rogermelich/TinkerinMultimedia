@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">

                <video id="video1" class="video-js" controls
                       preload="auto" width="640" height="460"
                       poster="http://lorempixel.com/640/460" data-setup="{}">
                    <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type='video/mp4'>
                    <p class="vjs-no-js">El navegador no supporta aquests reproductor
                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            </div>
        </div>
    </div>
@endsection
