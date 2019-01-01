@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card-body">

                    <h2>List of Offers</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Store</th>
                                <th>Details</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach ($offers as $i => $offer)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $offer{'title'} }}</td>
                                <td>{{ isset( $offer{'store'} ) ?  $offer{'store'} : ' - ' }}</td>
                                <td>{{ $offer{'details'} }}</td>
                                <td>{{ $offer{'category'} }}</td>
                                <td>
                                    <form action="/offers/{{ $offer{'_id'} }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="button" class="offer-action" value="View" onclick="window.location ='{{ route('offers.show', ['offer' => $offer{'_id'}]) }}'">
                                        <input type="button" class="offer-action" value="Edit" onclick="window.location ='{{ route('offers.edit', ['offer' => $offer{'_id'}]) }}'">
                                        <input type="hidden" class="offer-action" name="_method" value="DELETE"/>
                                        <input type="submit" class="offer-action" name="del" value="Delete"/>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <input type="button" class="book-action big" value="Add an Offer" onclick="window.location ='{{ route('offers.create') }}'">
                </div>
            </div>
        </div>
    </div>
@endsection