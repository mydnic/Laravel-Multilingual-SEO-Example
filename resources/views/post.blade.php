@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>{{ $post->title }}</h1>
            <div class="panel panel-default">

                <div class="panel-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
