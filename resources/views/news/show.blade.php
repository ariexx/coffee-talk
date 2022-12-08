@extends('layouts.template')
@section('title', $news->title)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if($news->image ?? false)
                        <img class="card-img-top mb-3" src="{{asset('storage/' . $news->image)}}" alt="Card image cap">
                    @endif
                    <p>
                        {{$news->content }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
