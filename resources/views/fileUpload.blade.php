@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File upload</div>
                <div class="card-body">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                        <input type="file" name="file" class="form-control-file">
                        <br>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
