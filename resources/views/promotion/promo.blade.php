@extends('layouts.template')
@section('title', $ad->name)
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <img class="card-img-top" src="{{$ad->image_link}}" alt="{{$ad->name}}">
                <div class="card-body">
                    <p class="card-text">
                        {!! $ad->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mb-5">
        <h3>Promo Lainnya</h3>
    </div>
    <div class="row">
        @foreach($anotherAds as $anotherAd)
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="{{$anotherAd->image_link}}" alt="{{$anotherAd->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$anotherAd->name}}</h5>
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        <a href="{{ route('promo', $anotherAd->id) }}" class="btn btn-outline-success col">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
