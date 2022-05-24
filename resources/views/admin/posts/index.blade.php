@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container-fluid w-75 mx-auto">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Autore</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <td> 
                                <a href="{{route("admin.posts.show", $post)}}">
                                    {{ $post->title}}
                                </a>
                                
                            </td>
                            <td> {{ $post->autore}}</td>
                        </tr>
                            
                        @empty
                            
                        @endforelse
                        
                    </tbody>

                </table>
            </div>

        </div>

    </div>

@endsection