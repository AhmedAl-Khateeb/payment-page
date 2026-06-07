@extends('layouts.app')

@section('content')

<div class="container">

    <div class="alert alert-success">

        <h3>Payment Successful</h3>

        <p>
            Your payment has been completed successfully.
        </p>

    </div>

    <a href="{{ route('orders.index') }}"
       class="btn btn-success">
        My Orders
    </a>

</div>

@endsection