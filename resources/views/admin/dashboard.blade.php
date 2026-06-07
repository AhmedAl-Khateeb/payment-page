@extends('layouts.admin')

@section('title', 'الرئيسية')

@section('contentheader', 'لوحة التحكم')

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $usersCount }}</h3>
                <p>المستخدمين</p>
            </div>
        </div>
    </div>

   

</div>

@endsection