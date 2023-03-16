@extends('admin_dashboard')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="page-title">{{$post->title}}</h1>
                            <div class="">
                                <div class="feed-date">{{$post->created_at->diffForHumans()}}</div>
                                <div class="badge bg-success">Poster - {{$post->poster->name}} </div>
                                <div class="badge bg-warning">{{$post->category->category_name}}</div>
                            </div>
                                <p class="lh-md mt-3">
                                    {{$post->body}}
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection