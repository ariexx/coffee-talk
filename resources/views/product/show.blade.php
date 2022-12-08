@extends('layouts.template')
@section('title', 'Product')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Product Details</h3>
                    </div>
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $product->name }}</h3>
                                <p>{{ $product->description ?? "Tidak ada deskripsi" }}</p>
                                <p>Price:
                                    @if(!$product->is_discount)
                                        {{ rupiah($product->price) }}
                                    @else
                                        <strike>{{rupiah($product->price)}}</strike> -
                                        <b>{{ rupiah($product->discount_price) }}</b>
                                    @endif</p>
                                <p>Category: {{ $product->category->name ?? "Tidak ada" }}</p>
                                <form method="POST" action="{{route('order.add-to-cart', $product->id)}}">
                                    @csrf
                                    <button class="btn btn-outline-success">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
