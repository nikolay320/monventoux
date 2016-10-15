@extends('main')

@section('content')

    <figure class="banner fixed home">
        <div class="row">
            <div class="columns small-12 medium-10 large-8 medium-centered" scrollfade>
                <h2 class="color-white flamenco text-center">{!! $title !!}</h2>
                <h4 class="color-white lato text-italic text-center">{{$eventdate}}</h4>
            </div>
        </div>
    </figure>

    @include('partials.partial-menu')

    <div class="home-sections">
        <section class="section-event scroll-section" id="event">
            <h4 class="flamenco text-center">{!! $slogan!!}</h4>
            @include("partials.partial-after-buttons")
        </section>
        <section class="section-blog scroll-section" id="blog">
            <div class="row">
                @include("partials.partial-aftermovie")
            </div>
            <div class="row">
                @include("partials.partial-aftermovie-start")
                {{--@include("partials.partial-news")--}}
            </div>
        </section>
        @if($quotes['hasquote'])
            <section class="section-quotes scroll-section" id="quotes">
                @include("partials.partial-quotes")
            </section>
        @endif
        <section class="section-images scroll-section" id="images">
            @include("partials.partial-images")
        </section>
        @if($banner['hasbanner'])
            <section class="section-newsletter scroll-section" id="banner">
                @include("partials.partial-banner")
            </section>
        @endif
        <section class="section-newsletter scroll-section" id="newsletter">
            @include("partials.partial-newsletter")
        </section>
        <section class="section-partners scroll-section" id="partners">
            @include("partials.partial-partners")
        </section>

    </div>

@stop