@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card-body">
                    <h1>{{ $offer{'title'} }}</h1>
                    <p>{{ $offer{'store'} }}</p>
                    <p>{{ $offer{'details'} }}</p>
                    <p>{{ $offer{'category'} }}</p>

                    <br/><hr/>

                    <input type="button" class="offer-action big" value="Return" onclick="window.location='{{ route('offers.index') }}'">
                </div>
            </div>
        </div>
    </div>
@endsection