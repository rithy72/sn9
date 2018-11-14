

@extends('Frontend.Pages.setting')
@section('content')
     <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        </div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate="">

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="mb-3">
              <label for="address">Telephone</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your Telephone" required="">
              <div class="invalid-feedback">
                Enter Your Telephone
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Current Password</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your Current Password" required="">
              <div class="invalid-feedback">
                Enter Your Current Password
              </div>
            </div>

            <div class="mb-3">
              <label for="address">New Password</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your New Password" required="">
              <div class="invalid-feedback">
                Please enter your new Password
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Confirm Current Password</label>
              <input type="text" class="form-control" id="address" placeholder="Enter Your Confirm Current Password" required="">
              <div class="invalid-feedback">
                Please enter your Confirm Current Password
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save Chang</button>
          </form>
        </div>
      </div>
          </div>
@endsection
