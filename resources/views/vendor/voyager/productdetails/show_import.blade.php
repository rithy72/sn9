

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@stop

@section('page_title')

@section('page_header')
    <h1 class="page-title">
        <i class=""></i>
       Import Product
    </h1>


@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form" class="form-edit-add" action="{{route('productdetail.insert')}}" method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->

                        {{csrf_field()}}

                        <div class="panel-body">


                            <!-- Adding / Editing -->

                            <!-- GET THE DISPLAY OPTIONS -->
                            <div class="form-group  col-md-4">
                                <label for="name">Invoice#</label>
                                <input type="text" class="form-control" name="invoiceNumber" placeholder="invoice#" value="" required>

                            </div>

                            <div class="form-group  col-md-4">
                                    <label for="name">Import Date</label>
                                    <input type="date" class="form-control" placeholder="Import Date" value="" name="importDate" required>
                            </div>

                            {{--Table--}}
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th style="width:10%">Barcode</th>
                                    <th style="width:16%">Main Product</th>
                                    <th style="width:15%">Product</th>
                                    <th style="width:5%">Image</th>
                                    <th style="width:5%">Size</th>
                                    <th style="width:5%">Width</th>
                                    <th style="width:5%">Height</th>
                                    <th style="width:5%">Length</th>
                                    <th style="width:5%">QTY</th>
                                    <th style="width:5%">Cost</th>
                                    <th style="width:5%">Price</th>
                                    <th style="width:5%">Dis</th>
                                    <th style="width:8%">Amount</th>
                                    <th style="width:5%"class="no-sort no-click" id="bread-actions">
                                        <a onclick="addRow()" href="#" title="View" class="btn btn-sm btn-success pull-right addRow">
                                            <i class="voyager-plus"></i> <span class="hidden-xs hidden-sm"></span>
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="barcode[]" placeholder="barcode" value="" required>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-9" style="padding-right: 0px;">
                                                <select required="true" class="form-control" name="mainProduct[]" id="mainProduct" required>
                                                    <option value="0" selected disabled>Choose</option>
                                                    @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <a style="margin-top: 0px" href="#" title="View" class="btn btn-sm btn-success pull-right addNewProduct" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="voyager-plus"></i> <span class="hidden-xs hidden-sm"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="productName[]" placeholder="product name" value="">
                                    </td>
                                    <td>
                                        <input type="file" name="image[]" accept="image/*">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control size" name="size[]" placeholder="#" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control width" name="width[]" placeholder="#" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control height" name="height[]" placeholder="#" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control length" name="length[]" placeholder="#" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control qty" name="qty[]" placeholder="#" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control cost" name="cost[]" placeholder="$" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control price" name="price[]" placeholder="$" value="">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control dis" name="dis[]" placeholder="%" value="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control amount" name="amount[]" placeholder="$" value="">
                                    </td>

                                    <td class="no-sort no-click removeRow" id="bread-actions">

                                        <a onclick="deleteRow(this)" href="#" title="View" class="btn btn-sm btn-danger pull-right removeRow">
                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm"></span>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total</th>
                                <th class="total">0</th>
                                </tfoot>
                            </table>
                            {{--end Tabel--}}
                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary save">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="modal modal-default fade in" tabindex="-1" id="exampleModal" role="dialog" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title"><i class="voyager-trash"></i> Add New Product</h4>
                    </div>
                    <div class="modal-footer">
                        <form action="#" id="delete_form" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group  col-md-12">
                                <label class="pull-left" for="name">Product Name</label>
                                <input id="product_name" type="text" class="form-control" name="name" placeholder="Product Name" value="">
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="pull-left" for="name">Category</label>
                                <select class="form-control" name="category" id="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="pull-left" for="name">Brand</label>
                                <select class="form-control" name="brand" id="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="pull-left" for="name">Type</label>
                                <select class="form-control" name="type" id="type_id">
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="pull-left" for="name">Size Type</label>
                                <select class="form-control" name="sizetype" id="sizetype_id">
                                    @foreach($sizetypes as $sizetypes)
                                        <option value="{{$sizetypes->id}}">{{$sizetypes->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="pull-left" for="name">Feature</label>
                                <input style="width: 250px" type="file" name="feature" accept="image/*" id="feature">
                            </div>
                            <div class="form-group  col-md-6">
                                <label class="pull-left" for="name" >Images</label>
                                <br>
                                <input style="width: 250px" type="file" id="images" name="images[]" multiple="multiple" accept="image/*">
                            </div>
                            <input type="button" onclick="insertNewProduct()" class="btn btn-success pull-right delete-confirm" value="Save">
                        </form>
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>

@stop

@section('javascript')

    <script>

        $('addRow').on('click',function () {
            addRow();
        });

        $('.removeRow').on('click',function(){
            $('#row1').remove();
        });

        function addRow()
        {
            var addRow='<tr>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control" name="barcode[]" placeholder="barcode" value="" required>\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <div class="row">\n' +
                '                                            <div class="col-md-9" style="padding-right: 0px;">\n' +
                '                                                <select required="true" class="form-control" name="mainProduct[]" id="mainProduct" required>\n' +
                '                                                    <option value="0" selected disabled>Choose</option>\n' +
                '                                                    @foreach($products as $product)\n' +
                '                                                    <option value="{{$product->id}}">{{$product->name}}</option>\n' +
                '                                                    @endforeach\n' +
                '                                                </select>\n' +
                '                                            </div>\n' +
                '                                            <div class="col-md-3">\n' +
                '                                                <a style="margin-top: 0px" href="#" title="View" class="btn btn-sm btn-success pull-right addNewProduct" data-toggle="modal" data-target="#exampleModal">\n' +
                '                                                    <i class="voyager-plus"></i> <span class="hidden-xs hidden-sm"></span>\n' +
                '                                                </a>\n' +
                '                                            </div>\n' +
                '                                        </div>\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control" name="productName[]" placeholder="product name" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="file" name="image[]" accept="image/*">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control size" name="size[]" placeholder="#" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control width" name="width[]" placeholder="#" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control height" name="height[]" placeholder="#" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control length" name="length[]" placeholder="#" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control qty" name="qty[]" placeholder="#" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control cost" name="cost[]" placeholder="$" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control price" name="price[]" placeholder="$" value="">\n' +
                '                                    </td>\n' +
                '\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control dis" name="dis[]" placeholder="%" value="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" class="form-control amount" name="amount[]" placeholder="$" value="">\n' +
                '                                    </td>\n' +
                '\n' +
                '                                    <td class="no-sort no-click removeRow" id="bread-actions">\n' +
                '\n' +
                '                                        <a onclick="deleteRow(this)" href="#" title="View" class="btn btn-sm btn-danger pull-right removeRow">\n' +
                '                                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm"></span>\n' +
                '                                        </a>\n' +
                '                                    </td>\n' +
                '                                </tr>';
            $('tbody').append(addRow);
        }

        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("dataTable").deleteRow(i);
        }
        // Total product imported
        function Total()
        {
            var total =0;
            $('.amount').each(function (i,e) {
                var amount=$(this).val()-0;
                total+=amount;
            });
            $('.total').html(total.formatMoney(2,'.',',')+'$');
        }
        /* global prototype formatMoney function
	    * 	params:
	    *		c (integer): count numbers of digits after sign
	    *		d (string): decimals sign separator
	    *		t (string): miles sign separator
	    *
	    *	example:
	    *		(123456789.12345).formatMoney(2, ',', '.');
	    *			=> "123.456.789,12" Latinoamerican moneyFormat
	    */
        Number.prototype.formatMoney = function(c, d, t){
            var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        };

        //end format modey

        $('tbody').delegate('.qty ,.cost,.price,.dis','keyup',function () {

            var tr =$(this).parent().parent();
            var qty=tr.find('.qty').val();
            var cost=tr.find('.cost').val();
            var dis=tr.find('.dis').val();
            var amount =(qty*cost)-(qty*cost*dis)/100;
            tr.find('.amount').val(amount);
            Total();
        });

        function insertNewProduct()
        {
            var product_nam=$('#product_name').val();
            var category_id=$('#category_id').val();
            var brand_id=$('#brand_id').val();
            var type_id=$('#type_id').val();
            var sizetype_id=$('#sizetype_id').val();

            $.ajax({
                type: 'POST',
                url: "{{ route('product.modal') }}",
                data: {
                    product_name: product_nam,category_id:category_id,brand_id:brand_id,type_id:type_id,sizetype_id:sizetype_id,_token: $('[name="_token"]').val()
                },
                success: function (data){
                    $('#exampleModal').modal('hide');
                    var selOpts = "";
                    $('#mainProduct').html('');
                    $.each(data, function(k, v)
                    {
                        var id = data[k].id;
                        var val = data[k].name;
                        selOpts += "<option value='"+id+"'>"+val+"</option>";
                    });
                    $('#mainProduct').append(selOpts);
                },
                error: function(e) {
                    console.log(e);
                }});
        }


    </script>
@stop
