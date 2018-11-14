@extends('Frontend.Pages.setting')

@section('active')
    Credit-Card
@stop
@section('credit-card')
    active
@stop

@section('content')
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate="">


                <div class="form-group">
                    <label for="address">Credit card number</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Your Credit card number" value="**** **** **** {{$fourEnd}}" disabled>
                </div>

                <div class="form-group">
                    <label for="address">Expiration</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Your Expiration" required="" value="{{ $data2 }}" disabled>
                </div>

            </form>
        </div>
    </div>
@stop