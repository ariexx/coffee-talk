@extends('layouts.template')
@section('title', "News")
@section('content')
    <!--Main layout-->
    <div class="container">
        <!--Section: News of the day-->
        <section class="border-bottom pb-4 mb-5">
            <div class="row gx-5">
                <div class="col-md-6 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        @if($news->first()->image ?? false)
                            <img src="{{asset('storage/' . $news->first()->image)}}" class="img-fluid"/>
                        @endif
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    {{--                    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>--}}
                    <h4><strong>{{$news->first()->title ?? ''}}</strong></h4>
                    <p class="text-muted">
                        {{$news->first()->content ?? ''}}
                    </p>
                    <a href="{{route('news.show', $news->first()->slug ?? '')}}" class="btn btn-dark">Read more</a>
                </div>
            </div>
        </section>
        <!--Section: News of the day-->

        <!--Section: Content-->
        <section class="mb-5">
            <div class="row gx-lg-5">
                @foreach($news as $new)
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <!-- News block -->
                        <div>
                            <!-- Featured image -->
                            <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                                 data-mdb-ripple-color="light">
                                <img src="{{asset('storage/' . $new->image)}}" class="img-fluid"/>
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>

                            <!-- Article data -->
                            <div class="row mb-3">
                                {{--                                <div class="col-6">--}}
                                {{--                                    <a href="" class="text-info">--}}
                                {{--                                        <i class="fas fa-plane"></i>--}}
                                {{--                                        Travels--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}

                                <div class="col-6 text-end">
                                    <u> {{$new->created_at->diffForHumans()}}</u>
                                </div>
                            </div>

                            <!-- Article title and description -->
                            <a href="" class="text-dark">
                                <h5>{{$new->title}}</h5>

                                <p>
                                    {{$new->content}}
                                </p>
                            </a>
                            <a href="{{route('news.show', $new->slug)}}" class="btn btn-dark mb-3">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!--Section: Content-->

        <!-- Pagination -->
        <center>
            {{ $news->links() }}
        </center>
    </div>
    <!--Main layout-->
@endsection
