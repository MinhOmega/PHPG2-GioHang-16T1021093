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
})(jQuery);