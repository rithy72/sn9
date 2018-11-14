@extends('voyager::master')

@section('content')
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-8 order-md-1">
            <form class="needs-validation">
                <div class="form-group">
                    <label for="address">First Name</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Your First Name"
                           required="">
                </div>

                <div class="form-group">
                    <label for="address">Last Name</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Your Last Name" required="">
                </div>

                <div class="form-group">
                    <label for="address2">Address</label>
                    <input type="text" class="form-control" id="address2" placeholder="Enter Your Address">
                </div>
                <div class="form-group">
                    <label for="birthday">Date of birth</label><br>
                    <input type="date" min="1900-01-01" name="yyyy-mm-dd" max="2018-01-01">
                </div>
                <div class="form-group">
                    <label for="birthday">Gender</label><br>
                    <ul style="display: inline-flex;margin: 0px;list-style: none;padding: 0">
                        <li style="margin-left: 5px;margin-right: 10px">
                            <label class="label--radio">
                                <input type="radio" class="radio" checked name="foo">
                                Female
                            </label>
                        </li>
                        <li>
                            <label class="label--radio">
                                <input type="radio" class="radio" name="foo">
                                Male
                            </label>
                        </li>
                    </ul>
                </div>

                <hr class="form-group">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Save Chang</button>
            </form>
        </div>
    </div>
@stop