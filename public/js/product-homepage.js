jQuery(document).ready(function () {
    jQuery('.post-latest').click(function () {
        let category_id = jQuery(this).attr('id_cate');
        let token = jQuery('input[name=_token]').val();
        jQuery.ajax({
            url:'porduct-latest',
            method:'post',
            data:{'category_id':category_id, "_token": token}
        }).done(function (result) {
            let buy ='';
            let sell ='';
            for(let i = 0; i<result.length; i++){
                if(result[i].status == 0){
                    sell+='<li class="product">';
                    sell+='<div class="product-container">';
                    sell+='<div class="product-image">';
                    sell+='<a href="product-detail/'+result[i].id+'"><img style="height: 242.94px" src="'+result[i].images[0].image_path+'" alt="Product"></a>';
                    sell+='<div class="group-tool-button" style="left: 67%">';
                    sell+='<a class="withlist wishlist" id-product="'+result[i].id+'">withlist</a>';
                    sell+='<a class="cart" href="#">cart</a>';
                    sell+='</div>';
                    sell+='<a href="product-detail/'+result[i].id+'" class="quick-view">Qick view</a>';
                    sell+='<span class="status-new"></span>';
                    sell+='</div>';
                    sell+='<div class="product-info">';
                    sell+='<h5 class="product-name"><a href="product-detail/'+result[i].id+'">'+result[i].name+'</a></h5>';
                    sell+='<div class="box-price">';
                    sell+='<span class="product-price">$'+(result[i].price-(result[i].price*result[i].sale)/100)+'</span>';
                    sell+='<span class="old-price">$'+result[i].price+'</span>';
                    sell+='</div>';
                    sell+='</div>';
                    sell+='</div>';
                    sell+='</li>';
                }
                else if(result[i].status == 1){
                    buy+='<li class="product">';
                    buy+='<div class="product-container">';
                    buy+='<div class="product-image">';
                    buy+='<a href="product-detail/'+result[i].id+'"><img style="height: 242.94px" src="'+result[i].images[0].image_path+'" alt="Product"></a>';
                    buy+='<div class="group-tool-button" style="left: 67%">';
                    buy+='<a class="withlist wishlist" id-product="'+result[i].id+'">withlist</a>';
                    buy+='<a class="cart" href="#">cart</a>';
                    buy+='</div>';
                    buy+='<a href="product-detail/'+result[i].id+'" class="quick-view">Qick view</a>';
                    buy+='<span class="status-new"></span>';
                    buy+='</div>';
                    buy+='<div class="product-info">';
                    buy+='<h5 class="product-name"><a href="product-detail/'+result[i].id+'">'+result[i].name+'</a></h5>';
                    buy+='<div class="box-price">';
                    buy+='<span class="product-price">$'+(result[i].price-(result[i].price*result[i].sale)/100)+'</span>';
                    buy+='</div>';
                    buy+='</div>';
                    buy+='</div>';
                    buy+='</li>';
                }
            }
            if(sell==''){
                sell='<strong style="padding: 20px; color: red">Không có sản phẩm nào đang bán</strong>'
            }
            if(buy==''){
                buy='<strong style="padding: 20px; color: #2fa360">Không có ai đang mua</strong>'
            }

            jQuery('#latest-product-sell').html(sell);
            jQuery('#latest-product-buy').html(buy);
        })
    })
})
