@extends('layouts.app')

@section('content')

<div class="container">

    <div class="alert alert-danger">

        <h3>Payment Failed</h3>

        <p>
            Payment could not be completed.
        </p>

    </div>

    <a href="{{ route('checkout') }}"
       class="btn btn-primary">
        Try Again
    </a>

</div>

@endsection