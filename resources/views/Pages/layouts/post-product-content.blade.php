<!-- page wapper-->
<div class="columns-container">
    <div class="container wapper-page" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Post Product</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2 text-danger"><strong>POST PRODUCT</strong></span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-contact" style="width: 600px; margin-right: auto; margin-left: auto; font-size: 20px">
            <form action="post-product" method="POST">
                @csrf
                <div class="place" style="border: 1px solid #ccc; padding: 30px; border-radius: 5px; box-shadow: 0px 0px 10px 0.5px">
                    <div class="text-center"><strong>Place</strong></div>
                    <div class="form-group mt-5">
                        <label for="province">Province:</label>
                        <select class="form-control" name="province" id="province">
                            <option>Toàn Quốc</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="district">District:</label>
                        <select class="form-control" name="district" id="district">
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="ward">Ward:</label>
                        <select class="form-control" name="ward" id="ward">
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="village">Village:</label>
                        <select class="form-control" name="village" id="village">
                        </select>
                    </div>
                </div>
                <hr>
                <div class="place mt-5" style="border: 1px solid #ccc; padding: 30px; border-radius: 5px; box-shadow: 0px 0px 10px 0.5px">
                    <div class="text-center"><strong>Product Info</strong></div>
                    <div class="form-group mt-5">
                        <label for="category">Select Category: </label>
                        <select type="text" class="form-control" name="category" id="category" >
                            <option></option>
                        </select>
                    </div>

                    <div class="form-group mt-5" >
                        <label for="category-child">Select Category Detail: </label>
                        <select type="text" class="form-control" name="category-child" id="category-child" >
                        </select>
                    </div>
                    <div class="form-group mt-5" >
                        <div class="mb-2">You Post:</div>
                        <p>
                            <input type="radio" id="sell" name="you_post" value="sell">
                            <label for="sell">Need sell</label>
                        </p>
                        <p>
                            <input type="radio" id="buy" name="you_post" value="buy">
                            <label for="buy">Need buy</label>
                        </p>
                    </div>
                    <div class="form-group mt-5" >
                        <label for="price">Price(VND): </label>
                        <input style="color: red" type="text" class="form-control" name="price" id="price" >
                    </div>
                    <div class="form-group mt-5" >
                        <div class="mb-2">Tình trạng:</div>
                        <p>
                            <input type="radio" id="new" name="tt" value="new">
                            <label for="new">New</label>
                        </p>
                        <p>
                            <input type="radio" id="used" name="tt" value="used">
                            <label for="used">Used</label>
                        </p>
                    </div>
                    <div class="form-group mt-5" >
                        <label for="price">Name: </label>
                        <input style="" type="text" class="form-control" name="name" id="name" >
                    </div>
                    <div class="form-group mt-5" >
                        <label for="price">Detail: </label>
                        <textarea  type="text" class="form-control ckeditor" name="detail" id="detail" ></textarea>
                    </div>
                    <div class="form-group mt-5" >
                        <label for="price">Cover: </label>
                        <input  type="file" class="form-control" name="cover[]" id="cover" multiple="true" >
                    </div>
                </div>

                <div class="text-center" style="margin-top: 50px">
                    <button  type="submit" class="btn-success btn" id="submit" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@section('script')
    <script>
        jQuery(document).ready(function () {
            jQuery('#submit').click(()=>{
                console.log(jQuery('#cover').val())
            })
            getAjax = (url,method,data)=>{
                return jQuery.ajax({
                    url:url,
                    method:method,
                    data:data,
                })
            }
            var location={
                province:'',
                district:'',
                ward:'',
                village:''
            };
            getAjax('getProvince','GET').done((result)=>{
                result.forEach((data)=>{
                    jQuery('#province').append('<option value="'+data.provinceid+'">'+data.name+'</option>')
                });
            })
            getAjax('list-cate','GET').done((result)=>{
                result.forEach((data)=>{
                    jQuery('#category').append('<option value="'+data.id+'">'+data.name+'</option>')
                });
            })
            jQuery('#category').change(function () {
                jQuery('#category-child').html('');
                jQuery('#category-child').append('<option></option>');
                var category = jQuery(this).val();

                getAjax('category-child','GET',{category:category}).done((result)=>{
                    result.forEach((data)=>{
                        jQuery('#category-child').append('<option value="'+data.id+'">'+data.name+'</option>')
                    });
                })
            })
            jQuery('#province').change(function () {
                location.province
                jQuery('#district').html('');
                jQuery('#district').append('<option></option>');
                var province = jQuery(this).val();
                location.province = province;
                getAjax('getDistrict','GET',{provinceid:province}).done((result)=>{
                    result.forEach((data)=>{
                        jQuery('#district').append('<option value="'+data.districtid+'">'+data.name+'</option>')
                    });
                })
            })
            jQuery('#district').change(function () {
                jQuery('#ward').html('');
                jQuery('#ward').append('<option></option>');
                var district = jQuery(this).val();
                location.district = district;
                getAjax('getWard','GET',{districtid:district}).done((result)=>{
                    result.forEach((data)=>{
                        jQuery('#ward').append('<option value="'+data.wardid+'">'+data.name+'</option>')
                    });
                })
            })
            jQuery('#ward').change(function () {
                jQuery('#village').html('');
                jQuery('#village').append('<option></option>');
                var ward = jQuery(this).val();
                location.ward = ward;
                getAjax('getVillage','GET',{wardid:ward}).done((result)=>{
                    result.forEach((data)=>{
                        jQuery('#village').append('<option value="'+data.villageid+'">'+data.name+'</option>')
                    });
                })
            })
            jQuery('#village').change(function () {
                var village = jQuery(this).val();
                location.village = village;
            })
            jQuery('#ok').click(function () {

                console.log(location)
            })
        })
    </script>
    @endsection
<!-- ./page wapper-->
