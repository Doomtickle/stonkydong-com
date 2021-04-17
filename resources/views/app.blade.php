@extends('_layouts.main')

@section('content')
    <section class="w-full pb-20 mx-auto font-light text-center max-w-7xl lg:py-48 lg:text-left">
        @include('_components/nav')
        @include('_components/hero')
        @include('_components/feature')
        @include('_components/testimonial')
    </section>
@endsection
