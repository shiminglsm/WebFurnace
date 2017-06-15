@extends('main')

@section('title', '| Homepage')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1> Welcome to WebFurnace</h1>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Getting Started</a></p>
            </div>
        </div>
    </div> 
    <!--end of header row-->
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Design 1</h3>
                <p> This is one design </p>
                <a href='#' class="btn btn-primary"> Visit Profile </a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2> Sidebar </h2>
        </div>
    </div>

@endsection