@extends('Frontend.Pages.setting')
@section('content')
     <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        </div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate="">


            <div class="mb-3">
              <label for="address">Credit card number</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your Credit card number" required="">
              <div class="invalid-feedback">
                Enter Your Credit card number
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Expiration</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your Expiration" required="">
              <div class="invalid-feedback">
                Enter Your Expiration
              </div>
            </div>

            <div class="mb-3">
              <label for="address">CVC</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your CVC" required="">
              <div class="invalid-feedback">
                Please enter your CVC
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save Chang</button>
          </form>
        </div>
      </div>
          </div>
@endsection


