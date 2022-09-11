@extends('layout')

@section('content')
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item-->
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">{{ $product->name }}</h5>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">₹{{ $product->price }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ url('products/'.$product->id) }}" class="btn btn-primary">Buy now</a>
                                    </div>
                                </div>
                            </div> <!-- End -->
                        </li> <!-- End -->
                    @endforeach
                </ul> <!-- End -->
            </div>
        </div>
@endsection
