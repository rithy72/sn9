<div class="dialog-user" title="Create User" style="display: none">
    <div class="box-body">
        {!! Form::open(['route' => 'admin.user', 'method' => 'post']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="float-right" for="">User Name</label>
                </div>
                <div class="col-sm-8">
                    {!! Form::input('username','','',array('class'=> 'form-control','placeholder'=>'username')) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="float-right" for="">Email</label>
                </div>
                <div class="col-sm-8">
                    {!! Form::input('email','','',array('class' => 'form-control','placeholder' => 'example@email.com')) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="float-right" for="">Birthday</label>
                </div>
                <div class="col-sm-8">
                    <input class="form-control" type="date" id="end" name="order"
                           value="2018-07-29"
                           min="2018-01-01" max="2106-12-31"/>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="float-right" for="">Password</label>
                </div>
                <div class="col-sm-8">
                    {!! Form::password('password', ['class' => 'form-control','placeholder' => '********']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="float-right" for="">Confirm Pass</label>
                </div>
                <div class="col-sm-8">
                    {!! Form::password('confirm-password', ['class' => 'form-control','placeholder' => '********']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="float-right" for="">Image</label>
                </div>
                <div class="col-sm-8">
                    {!! Form::file('filename', ['class' => 'form-control','accept' => '.png,.jpg']) !!}
                </div>
            </div>
        </div>
        {!! Form::submit('Submit', array('class' => 'form-control btn-border')) !!}
        {!! Form::close() !!}
    </div>

</div>

