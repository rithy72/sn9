@extends('Frontend.Pages.setting')
@section('extra-css')
@endsection

@section('content')
{{-- Strat Content --}}
          <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

            <div class="row">
                <div class="col-md-12">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Order Item(s)</span>
            <span class="badge badge-secondary badge-pill">2</span>
          </h4>
          {{-- Title Right --}}
                </div>

            <div class="col-md-12" style="height: 380px;
                overflow: scroll;">
            <ul class="list-group mb-3" >


            <div class="card-group">
              <div class="card">
                <img class="card-img-top"  src="images/2.jpg" data-holder-rendered="true" style="padding:5px;">
              </div>
              <div class="card">
                <div class="card-body" style="padding: 0.25rem;">
                  <h5 class="card-title">7 Habits Effective People</h5>
                  <h6 class="card-title">Quantty(s) : 10
                  </h6>
                  <h6 class="card-title">Price : $ 30.00</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <button type="button" class="btn btn-primary btn-sm">Cancel</button>
                </div>
              </div>
            </div>

            <div class="card-group">
              <div class="card">
                <img class="card-img-top"  src="images/3.jpg" data-holder-rendered="true" style="padding:5px;">
              </div>
              <div class="card">
                <div class="card-body" style="padding: 0.25rem;">
                  <h5 class="card-title">7 Habits Effective People</h5>
                  <h6 class="card-title">Quantty(s) :
                  </h6>
                  <h6 class="card-title">Price : $ 30.00</h6>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <button type="button" class="btn btn-primary btn-sm">Cancel</button>
                </div>
              </div>
            </div>







          </ul>
            </div>
            <div class="col-md-12" style="padding-top: 10px;">
            <h5 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Subtotal</span>
            <span class="badge badge-secondary badge-pill">$ 200.00</span>
          </h5>
          <h5 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Discount</span>
            <span class="badge badge-secondary badge-pill">$ 200.00</span>
          </h5>
          <h5 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Total</span>
            <span class="badge badge-secondary badge-pill">$ 200.00</span>
          </h5>
          {{-- Title Right --}}
                </div>
            </div>
        </div>
        {{-- Right Sidbar --}}
        <div class="col-md-8 order-md-1">
            <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Invoice#</th>
                  <th>Date</th>
                  <th>Function</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Cancel</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Cancel</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Cancel</button></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Cancel</button></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Cancel</button></td>

                </tr>
                <tr>
                  <td>6</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td><button type="button" class="btn btn-primary btn-sm">Cancel</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
          {{-- End Content Blcok --}}
@endsection


