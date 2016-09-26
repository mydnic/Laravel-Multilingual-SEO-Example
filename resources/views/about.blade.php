@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>{{ trans('app.about_page_title') }}</h1>
            <div class="panel panel-default">

                <div class="panel-body">
                    {{ trans('app.about_page_text') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
