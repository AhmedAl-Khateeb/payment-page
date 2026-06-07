@extends('layouts.user')

@section('content')

@include('front.sections.hero')
@include('front.sections.services')
{{-- @include('front.sections.portfolio') --}}
@include('front.sections.about_us', ['aboutUs' => $aboutUs])
@include('front.sections.contact_us')
@endsection