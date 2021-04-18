@extends('_layouts.main')

@section('content')
    <div class="w-full mx-auto font-light text-center max-w-7xl lg:pt-48 lg:text-left">
        @include('_components/nav')
        @include('_components/hero')
        @include('_components/feature')
        @include('_components/testimonial')
        @include('_components/footer')
    </div>
@endsection
