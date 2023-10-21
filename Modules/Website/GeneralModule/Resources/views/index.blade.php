@extends('website::layouts.master')

@section('content')
    @include('website::home.header', ['categories' => $categories])
    @include('website::home.slider', ['promotedProducts' => $promotedProducts])
    @include('website::home.best_selling', ['bestSellingProducts' => $bestSellingProducts])
    @include('website::home.brands', ['brands' => $brands])
    @include('website::home.most_viewed', ['mostViewedProducts' => $mostViewedProducts])
    @include('website::home.just_arrived', ['justArrivedProducts' => $justArrivedProducts])
    @include('website::home.footer')
@endsection
