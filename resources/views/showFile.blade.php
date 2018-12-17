@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show file upload</div>
                    <div class="card-body">
                        @foreach($urls as $url)
                            <a href="{{$url}}">{{$url}}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
