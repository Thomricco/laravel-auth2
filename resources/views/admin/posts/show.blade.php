@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container-fluid w-75 mx-auto">
            <div class="row">
                <div class="col-12">
                    <h1>
                        {{ $post->title }}
                    </h1>
                    <h4>
                        {{ $post->autore }}
                    </h4>
                </div>
                    
            </div>

        </div>

    </div>

@endsection