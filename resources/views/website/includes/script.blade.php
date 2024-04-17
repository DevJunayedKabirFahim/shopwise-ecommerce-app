
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="{{ asset('/') }}website/assets/js/jquery-3.7.0.min.js"></script>
<!-- popper min js -->
<script src="{{ asset('/') }}website/assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ asset('/') }}website/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="{{ asset('/') }}website/assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="{{ asset('/') }}website/assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="{{ asset('/') }}website/assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="{{ asset('/') }}website/assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="{{ asset('/') }}website/assets/js/jquery.countdown.min.js"></script>
<!-- imagesloaded js -->
<script src="{{ asset('/') }}website/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="{{ asset('/') }}website/assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="{{ asset('/') }}website/assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="{{ asset('/') }}website/assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="{{ asset('/') }}website/assets/js/jquery.elevatezoom.js"></script>
<!-- scripts js -->
<script src="{{ asset('/') }}website/assets/js/scripts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    function setSubCategory(categoryId){
        $.ajax({
            type: "GET",
            url : "{{ route('get-subCategory-by-category') }}",
            data : {id : categoryId},
            datatype: "JSON",
            success : function (response){
                var option = '';
                option += '<option disabled selected> -- Select Product Sub Category -- </option>';
                $.each(response, function (key, value){
                    option += '<option value="'+value.id+'"> '+value.name+' </option>';
                });

                $('#subCategoryId').empty();
                $('#subCategoryId').append(option);

            }
        });

    }
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

<script>
    function myWatch() {
        var dateTime = new Date();
        var hours = dateTime.getHours();
        var minutes = dateTime.getMinutes();
        var seconds = dateTime.getSeconds();

        document.getElementById('watch').innerText = hours + " : " + minutes + " : " + seconds;
    }

    setInterval(myWatch, 1000);
</script>

<script>
    $('#checkoutCustomerEmail').blur(function () {
        var email = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('ajax-email-check') }}",
            data: {email: email},
            DataType: "JSON",
            success: function (response) {
                $('#emailRes').text(response);
            }
        });
    });

    $('#checkoutCustomerMobile').blur(function () {
        var mobile = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('ajax-mobile-check') }}",
            data: {mobile: mobile},
            DataType: "JSON",
            success: function (response) {
                $('#mobileRes').text(response);
            }
        });
    });
</script>

<script>
    $('#searchText').keyup(function () {
        var searchText = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('get-product-by-search-text') }}",
            data: {search_text: searchText},
            DataType: "JSON",
            success: function (response) {
                var div = '';
                $('#searchContent').empty();
                $('#searchContent').append(div)
            }
        });
    });
</script>

