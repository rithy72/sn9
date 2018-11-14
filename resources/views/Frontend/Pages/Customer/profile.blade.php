@extends('Frontend.Pages.setting')

@section('active')
    Profile
@stop
@section('profile')
    active
@stop

@section('content')
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-8 order-md-1">
            <form action="{{route('setting.update_profile')}}" method="POST" class="needs-validation" novalidate="">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your First Name"
                           required="" value="{{$data->name}}" name="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" disabled class="form-control" id="email" placeholder="you@example.com" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label for="address">Telephone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter Your Telephone" required="" name="telephone" value="{{$data->tel}}">
                </div>

                <div class="form-group">
                    <label for="address2">Address</label>
                    <input type="text" class="form-control" id="address" value="{{$data->address}}"
                           placeholder="Enter Your Address" name="address">
                </div>
                <div class="form-group">
                    <label for="birthday">Date of birth</label><br>
                    <input type="date" min="1900-01-01" max="2018-01-01" value="{{$data->dob}}" name="dob">
                </div>
                <div class="form-group">
                    <ul style="display: inline-flex;margin: 0px;list-style: none;padding: 0">
                            <li style="margin-left: 5px;margin-right: 10px">
                                <label class="label--radio">
                                    <input type="radio" class="radio" @php if(($data->title)=='female') echo "checked" @endphp name="foo" value="female">
                                    Female
                                </label>
                            </li>
                            <li>
                                <label class="label--radio">
                                    <input type="radio" class="radio" @php if(($data->title)=='male') echo "checked" @endphp name="foo" value="male">
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
@endsection

