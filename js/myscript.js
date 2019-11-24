(function ($){
    'use strict';
    $(document).on('click', ".cart-product-remove", function(e){
        var id = $(this).attr("data-id");
        $.ajax({
            context: this,
            url : "handlecart.php",
            type: "post",
            datatype: "html",
            data: {
                "id": id,
            },
        }).done(
            function(html_data){
                $(".add-to-cart-product").html(html_data);
                var sum = 0;
                $('.product-subtotal:not(:first)').each(function(){
                    sum+=Number($(this).html());
                });
                $(".total").html(sum);
            }
        )
    })
    $(".quantity").change(function(e){
        e.preventDefault();
        var quantity = $(this).val();
        $.ajax({
            context: this,
            url: "handlecart.php",
            type: "post",
            datatype: "html",
            data: {
                "id": id,
                "quantity": quantity,
            },
        }).done(
            function(html_data){
                $(".add-to-cart-product").html(html_data);
                $(this).closest("tr").find(".product-subtotal").html(
                    quantity * Number($(this).closest("tr").find(".amount").html())
                    )
                var sum = 0;
                $('.product-subtotal:not(:first)').each(function(){
                    sum +=Number($(this).html());
                });
                $(".total").html(sum);
            }
        )
    })
    $(".product-remove").click(function(e){
        e.preventDefault();
        var id = $(this).attr("data-id");
        $.ajax({
            context: this,
            url: "handlecart.php",
            type: "post",
            datatype: "html",
            data: {
                "id": id,
            },
        }).done(
            function(html_data){
                $(".add-to-cart-product").html(html_data);
                $(this).closest("tr").remove();
                $(this).closest("tr").find(".product-subtotal").html(
                    quantity * Number($(this).closest("tr").find(".amount").html())
                )
                var sum = 0;
                $('.product-subtotal:not(:first)').each(function(){
                    sum+=Number($(this).html());
                });
                $(".total").html(sum);
            }
        )
        
    });
    
    $(".tocart").click(function(e){
        e.preventDefault();
        var id = $(this).attr("data-id");
        var title = $(this).attr("data-title");
        var price = $(this).attr("data-price");
        var image = $(this).attr("data-image");
        var quantity = $(this).closest(".product-attributes").find("#qty").val();
        $.ajax({
            url: "minicartinfo.php",
            type: "post",
            data:{
                "id": id,
                "title": title,
                "price": price,
                "quantity": quantity,
                "image": image,
            },
        }).done(
            function(html_data){
                $(".add-to-cart-product").html(html_data);
            }
        )
    });
    $(".cart").click(function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var title = $(this).closest(".product__content").find("h4").text();
        var price = $(this).closest(".product__content").find(".price").attr("data-price");
        var author = $(this).closest(".product").find(".hot-label").html();
        var image = $(this).closest(".product").find(".first__img").find("img").attr("src");
        var quantity = 1;
        // alert(id+" "+ price+ " "+title+ " "+image+ " "+author);
        console.log(price);
        console.log(id);
        console.log(title);
        console.log(image);
        //alert(id); 

        $.ajax({
            url: "minicartinfo.php",
            type: "post",
            dataType: "html",
            data: {
                "id": id,
                "title": title,
                "price": price,
                "quantity": quantity,
                "image": image,
            },
        }).done(
            function (html_data) {

                //Gán lại giỏ hàng mới
                $(".add-to-cart-product").html(html_data);

                //Bind lại event nút close cho giỏ hàng
                // $('.micart__close').on('click', function () {
                //     $('.minicart__active').removeClass('is-visible');
                // });
            }
        )
    })
})(jQuery);