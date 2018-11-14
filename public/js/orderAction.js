
$(".btn_cancel").click(function () {
    var inv_id = $(this).val();
    $.ajax({
        type: 'GET',
        url: "cancel-order",
        data: {invoice_id: inv_id},
        success: function (data) {
            var loc = window.location;
            window.location = loc.protocol + "//" + loc.hostname + ":8000" + "/setting-purchas_history";
        },
        error: function (e) {
            console.log(e);
        }
    });
});

$(".btn_preview").click(function () {
    $(".card-group").html('');
    $statusName = $(this).attr('id');
    var order_id = $(this).val();
    $.ajax({
        type: 'GET',
        url: "preview-order",
        data: {id: order_id},
        dataType: 'JSON',
        success: function (data) {
            $(".card-group-original").css("display", "none");
            var no = 1;
            var subtotal = 0;
            var total = 0;
            var discount = 0;
            var total_discount = 0;
            var subtotal_one_pro = 0.0;
            var total_dis_one_pro = 0;

            if (data.length > 0) {
                jQuery.each(data, function (index, item) {
                    total_dis_one_pro = (((item.price) * (item.qty))) * ((item.discount) / 100);
                    subtotal_one_pro = ((item.price) * (item.qty) - total_dis_one_pro);
                    // subtotal_one_pro=subtotal_one_pro.toFixed(2);
                    if($statusName !== "Cancelled")
                        if (item.status_id !== 7) {
                            $(".card-group").append('' +
                                '<div class="card">' +
                                '<img class="card-img-top" src="' + item.image_color + '" data-holder-rendered="true" style="padding:5px;">' +
                                '</div>' +
                                '<div class="card">' +
                                '<div class="card-body" style="padding: 0.25rem;">' +
                                '<h5 class="card-title">' + item.title + '</h5>' +
                                '<h6 class="card-title">Quantty(s) : ' + item.qty + '</h6>' +
                                '<h6 class="card-title">Price : $ ' + item.price + '</h6>' +
                                '<h6 class="card-title">Discount : % ' + item.discount + '</h6>' +
                                '<h6 class="card-title">TotalPrice : $  ' + subtotal_one_pro + ' </h6>' +
                                '<p class="card-text">Description:' + item.description + '</p>' +
                                // '<p class="card-text">Status: '+ item.status_id + '</p>' +
                                '<div class="cancel_btn">' +
                                '<button type="button" class="btn btn-primary btn-sm cancel_product_order" value="' + item.productdetail_id + '">Cancel product Order</button>' +
                                '</div>' +
                                '</div>' +
                                '</div>');
                        }
                        else {
                            $(".card-group").append('' +
                                '<div class="card">' +
                                '<img class="card-img-top" src="' + item.image_color + '" data-holder-rendered="true" style="padding:5px;">' +
                                '</div>' +
                                '<div class="card">' +
                                '<div class="card-body" style="padding: 0.25rem;">' +
                                '<h5 class="card-title">' + item.title + '</h5>' +
                                '<h6 class="card-title">Quantty(s) : ' + item.qty + '</h6>' +
                                '<h6 class="card-title">Price : $ ' + item.price + '</h6>' +
                                '<h6 class="card-title">Discount : % ' + item.discount + '</h6>' +
                                '<h6 class="card-title">TotalPrice : $  ' + subtotal_one_pro + ' </h6>' +
                                '<p class="card-text">Description:' + item.description + '</p>' +
                                '<p class="card-text">Statusing:Product Was Canceled</p>' +
                                '<div class="cancel_btn">' +
                                '<button type="button" class="btn btn-primary btn-sm cancel_product_order hidden" value="' + item.productdetail_id + '">Cancel product Order</button>' +
                                '</div>' +
                                '</div>' +
                                '</div>');
                        }
                        else {
                        $(".card-group").append('' +
                            '<div class="card">' +
                            '<img class="card-img-top" src="' + item.image_color + '" data-holder-rendered="true" style="padding:5px;">' +
                            '</div>' +
                            '<div class="card">' +
                            '<div class="card-body" style="padding: 0.25rem;">' +
                            '<h5 class="card-title">' + item.title + '</h5>' +
                            '<h6 class="card-title">Quantty(s) : ' + item.qty + '</h6>' +
                            '<h6 class="card-title">Price : $ ' + item.price + '</h6>' +
                            '<h6 class="card-title">Discount : % ' + item.discount + '</h6>' +
                            '<h6 class="card-title">TotalPrice : $  ' + subtotal_one_pro + ' </h6>' +
                            '<p class="card-text">Description:' + item.description + '</p>' +
                            '<p class="card-text">'+item.statusName+'</p>' +
                            '<div class="cancel_btn">' +
                            '<button type="button" class="btn btn-primary btn-sm cancel_product_order hidden" value="' + item.productdetail_id + '">Cancel product Order</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>');
                    }
                    subtotal += (subtotal_one_pro + total_dis_one_pro);
                    discount = ((parseFloat((item.price) * (item.qty))) * (parseFloat(item.discount) / 100));
                    total_discount = total_discount + discount;
                    total = subtotal - total_discount;
                });

                // cancel button

                $(".cancel_product_order").click(function () {
                    var ProId_Order = $(this).val();

                    subtotal = subtotal - (subtotal_one_pro + total_dis_one_pro);
                    total_discount = total_discount - total_dis_one_pro;
                    total = total - subtotal_one_pro;

                    $.ajax({
                        type: 'GET',
                        url: "cancel",
                        data: {ProId: ProId_Order, orderId: order_id, _token: $('[name="_token"]').val()},
                        dataType: "JSON",
                        success: function (data) {
                            // console.log(data);
                            var loc = window.location;
                            window.location = loc.protocol + "//" + loc.hostname + ":8000" + "/setting-purchas_history";
                        },
                        error: function (e) {
                            console.log(e);
                        }
                    });

                    $("#subtotal").html('<span class="badge badge-secondary badge-pill" id="subtotal">$ ' + subtotal + '</span>');
                    $("#discount").html('<span class="badge badge-secondary badge-pill" id="subtotal">$ ' + total_discount + '</span>');
                    $("#total").html('<span class="badge badge-secondary badge-pill" id="total">$ ' + total + '</span>')
                });
                no++;

                // End cancel button
            } else {
                alert('No');
            }

            $("#order_item").html('<span class="badge badge-secondary badge-pill" id="order_item">' + no + '</span>');
            // var loc = window.location;
            // window.location = loc.protocol+"//"+loc.hostname+":8000"+"/setting-purchas_history";
            //Calculate Subtotal
            $("#subtotal").html('<span class="badge badge-secondary badge-pill" id="subtotal">$ ' + subtotal + '</span>');
            $("#discount").html('<span class="badge badge-secondary badge-pill" id="subtotal">$ ' + total_discount + '</span>');
            $("#total").html('<span class="badge badge-secondary badge-pill" id="total">$ ' + total + '</span>')
            // alert(discount);
        },
        error: function (e) {
            console.log(e);
        }
    });

});
