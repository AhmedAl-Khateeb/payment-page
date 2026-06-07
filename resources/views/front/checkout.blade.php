@extends('layouts.user')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="card shadow" style="width: 450px; border-radius: 12px;">
        <div class="card-body p-4">

            <h4 class="text-center mb-4">Checkout</h4>

            <form method="POST" action="{{ route('payment.pay') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="customer_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <button class="btn btn-primary w-100">
                    Continue to Payment
                </button>

            </form>

        </div>
    </div>

</div>
@endsection