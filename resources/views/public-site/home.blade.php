@extends('layouts.app')

@section('content')

    @include('public-site.partials.hero-desktop')

    @include('public-site.partials.hero-mobile')

    @include('public-site.partials.filter')

    @include('public-site.partials.about')

    <!-- services -->
    @include('public-site.partials.services')

    @include('public-site.partials.featured-vehicles')

    @include('public-site.partials.import-inquiry')

    @include('public-site.partials.logos')

    @include('public-site.partials.stats')

@endsection
