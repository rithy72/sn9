

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.(!is_null($dataTypeContent->getKey()) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(!is_null($dataTypeContent->getKey()) ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>

    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->

                        @if(!is_null($dataTypeContent->getKey()))
                            {{ method_field("PUT") }}
                        @endif


                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{(!is_null($dataTypeContent->getKey()) ? 'editRows' : 'addRows' )};
                            @endphp



                            @foreach($dataTypeRows as $row)
                                <!-- GET THE DISPLAY OPTIONS -->

                                @php
                                    $options = json_decode($row->details);
                                    $display_options = isset($options->display) ? $options->display : NULL;
                                @endphp

                                @if ($options && isset($options->legend) && isset($options->legend->text))
                                    <legend class="text-{{isset($options->legend->align) ? $options->legend->align : 'center'}}" style="background-color: {{isset($options->legend->bgcolor) ? $options->legend->bgcolor : '#f0f0f0'}};padding: 5px;">{{$options->legend->text}}</legend>

                                @endif
                                @if ($options && isset($options->formfields_custom))
                                    @include('voyager::formfields.custom.' . $options->formfields_custom)

                                @else
                                    <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ isset($display_options->width) ? $display_options->width : 12 }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                        {{ $row->slugify }}

                                        <label for="name">{{ $row->display_name }}</label>

                                        @include('voyager::multilingual.input-hidden-bread-edit-add')
                                        {{-- by vannak Add Image --}}
                                        @if ($row->display_name=="Image Color")
                                        <div id="img_product">

                                        </div>
                                        @endif
                                        {{-- end customize --}}

                                        @if($row->type == 'relationship')
                                            @include('voyager::formfields.relationship')
                                        @else
                                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}

                                        @endif

                                        @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                            {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        </div>
                    </form>






                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>


            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script>

        var params = {};
        var $image;

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', function (e) {
                e.preventDefault();
                $image = $(this).siblings('img');

                params = {
                    slug:   '{{ $dataType->slug }}',
                    image:  $image.data('image'),
                    id:     $image.data('id'),
                    field:  $image.parent().data('field-name'),
                    _token: '{{ csrf_token() }}'
                }

                $('.confirm_delete_name').text($image.data('image'));
                $('#confirm_delete_modal').modal('show');
            });

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $image.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing image.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
        $("input[name='barcode']").keypress(function(e) {
            //13 maps to the enter key

            if (e.keyCode == 13) {
                e.preventDefault();
                // alert($(this).val());
                $('.save').attr("id","btn_import");
                $('.save').attr('type', 'button');
                $(".select2-hidden-accessible").attr("id","new_product");
                $(".select2-container--default").attr("id","new_productfront");
                var barcode=document.getElementsByName('barcode')[0].value;

                if(document.getElementsByName('status_id')[0].name=='status_id'){
                   document.getElementsByName('status_id')[0].id="new_status"
                }
                if(document.getElementsByName('title')[0].name=='title'){
                   document.getElementsByName('title')[0].id="new_title"
                }
                if(document.getElementsByName('description')[0].name=='description'){
                   document.getElementsByName('description')[0].id="new_description"
                }
                if(document.getElementsByName('cost')[0].name=='cost'){
                   document.getElementsByName('cost')[0].id="new_cost"
                }
                if(document.getElementsByName('price')[0].name=='price'){
                   document.getElementsByName('price')[0].id="new_price"
                }
                if(document.getElementsByName('discount')[0].name=='discount'){
                   document.getElementsByName('discount')[0].id="new_discount"
                }
                if(document.getElementsByName('size')[0].name=='size'){
                   document.getElementsByName('size')[0].id="new_size"
                }
                 if(document.getElementsByName('width')[0].name=='width'){
                   document.getElementsByName('width')[0].id="new_width"
                }
                 if(document.getElementsByName('length')[0].name=='length'){
                   document.getElementsByName('length')[0].id="new_length"
                }
                 if(document.getElementsByName('qty')[0].name=='qty'){
                   document.getElementsByName('qty')[0].id="new_qty"
                }



                var product_id=$(this).val();
                //SAKADA STYLE


                $.ajax({
                    type: 'GET',
                    url: "/barcode",
                    dataType:"json",
                    data: {product_id: product_id},
                    success: function (data){
                        if(data.length >0){
                        //OK
                            jQuery.each(data, function(index, item) {
                                // console.log(data);
                                $("#new_product").empty().append("<option value='"+ item.product_id +"' >"+ item.product_name +"</option>");
                                $("#new_product").prop('disabled', true);
                                $("#new_status").empty().append("<option value='"+ item.status +"' >"+ item.status +"</option>");
                                $("#new_status").prop('disabled', true);
                                // show product image
                                $("#img_product").empty().append("<img id='porduct_image' src='http://localhost:8000/storage/productdetails/October2018/cyHqmWFLB0LqKPCZ9foF.jpg'/>");
                                $("#porduct_image").css("max-width","200px");
                                $("#porduct_image").css("height","auto");
                                $("#porduct_image").css("clear","both");
                                $("#porduct_image").css("display","block");
                                $("#porduct_image").css("padding","2px");
                                $("#porduct_image").css("border","1px");
                                $("#porduct_image").css("border","1px solid #ddd");
                                $("#porduct_image").css("margin-bottom","10px");
                                //Show Title Product
                                $("#new_title").val(item.title);
                                $("#new_title").prop('disabled', true);
                                //Show Description
                                $("#new_description").val(item.description);
                                //Show Cost
                                $("#new_cost").val(item.cost);
                                //Show Price
                                $("#new_price").val(item.price);
                                //Set Discount
                                $("#new_discount").val('0');
                                //Set Size
                                $("#new_size").val(item.size);
                                //Set Width
                                $("#new_width").val(item.width);
                                //Set Length
                                $("#new_length").val(item.length);

                            });
                        //OK

                        }else{
                            alert('No Product');
                        }
                        $("#btn_import").click(function(){
                            $.ajax({
                                type: 'POST',
                                url: "/import",
                                dataType:"json",
                                data: {
                                    barcode: barcode,
                                    cost:$("#new_cost").val(),
                                    price:$("#new_price").val(),
                                    discount:$("#new_discount").val(),
                                    qty:$("#new_qty").val(),
                                    _token: $('[name="_token"]').val()},
                                success: function (data){
                                    console.log(data);
                                },
                                error: function(e) {
                                console.log(e);
                                alert('eeror');
                            }});
                        })

                    },
                    error: function(e) {
                    console.log(e);
                    alert('eeror');
                }});
            }
        })

    </script>
@stop
