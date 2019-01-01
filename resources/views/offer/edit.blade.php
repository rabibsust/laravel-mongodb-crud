@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card-header"><h1>Update offers</h1></div>
                <div class="card-body">
                    <form action="{{ route('offers.update',['id' =>  $offer{'_id'} ]) }}" method="post">

                        {{ csrf_field() }}

                        <label for="title">Title</label><input type="text" name="title" value="{{ $offer{'title'} }}">
                        <label for="store">Store</label><input type="text" name="store" value="{{ $offer{'store'} }}">
                        <label for="details">Details</label><input type="text" name="details" value="{{ $offer{'details'} }}">
                        <label for="category">Category</label><input type="text" name="category" value="{{ $offer{'category'} }}">
                        <br/><hr/>

                        <input type="button" class="offer-action big" value="Cancel" onclick="window.location='{{ route('offers.index') }}'">
                        <input type="reset" class="offer-action big">
                        <input type="hidden" name="_method" value="PUT"/>
                        <input type="submit" class="offer-action big" value="Submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection