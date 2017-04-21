@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

				<video id="video1" src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" preload="auto" controls></video>

                <div>
                    <button onclick="document.getElementById('video1').play()">Reproducir video</button>
                    <button onclick="document.getElementById('video1').pause()">Pausar el video</button>
                    <button onclick="document.getElementById('video1').volume+=0.1">Aumentar el Volumen</button>
                    <button onclick="document.getElementById('video1').volume-=0.1">Disminuir el Volumen</button>
                </div>

                <h1></h1>
                <audio id="audio1" src="https://upload.wikimedia.org/wikipedia/en/4/45/ACDC_-_Back_In_Black-sample.ogg" preload="auto" controls></audio>

                <div>
                    <button onclick="document.getElementById('audio1').play()">Reproducir el Audio</button>
                    <button onclick="document.getElementById('audio1').pause()">Pausar el Audio</button>
                    <button onclick="document.getElementById('audio1').volume+=0.1">Aumentar el Volumen</button>
                    <button onclick="document.getElementById('audio1').volume-=0.1">Disminuir el Volumen</button>
                </div>

			</div>
		</div>
	</div>
@endsection
