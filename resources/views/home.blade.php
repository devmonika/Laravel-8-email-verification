@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body bton">
                   <a class="viewBtn" href="{{route('view_user')}}"><button>View Details</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
