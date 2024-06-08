<footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
</footer>

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('tailerStaticTemplate/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('tailerStaticTemplate/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
</script>
<script src="{{ asset('tailerStaticTemplate/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('tailerStaticTemplate/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('tailerStaticTemplate/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('tailerStaticTemplate/dist/js/custom.min.js') }}"></script>
<!--This page JavaScript -->
<!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot/excanvas.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/dist/js/pages/chart/chart-page-init.js') }}"></script>


<!-- This Page JS -->
<script src="{{ asset('tailerStaticTemplate/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}">
</script>
<script src="{{ asset('tailerStaticTemplate/dist/js/pages/mask/mask.init.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}">
</script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
</script>
<script src="{{ asset('tailerStaticTemplate/assets/libs/quill/dist/quill.min.js') }}"></script>



<!-- plugin js  -->




<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>





<!-- end plugin js  -->



<script>
    // chatbox display and hide js 

    const chat__icon = document.getElementById('chat__icn');
    const chat__box = document.getElementById("chat__box");

    function showChatBox() {

        chat__icon.classList.add('hide_icon');
        chat__box.classList.add('show__chat__box')

    }

    function hideChatBox() {
        chat__icon.classList.remove('hide_icon');
        chat__box.classList.remove('show__chat__box')
    }
</script>



<script>
    /*colorpicker*/
    $('.demo').each(function() {

        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });


    new DataTable('#example', {
        order: [
            [3, 'desc']
        ],
        responsive: true
    });

    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap5'
    });
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap5'
    });
</script>




<script>
    // const toggle__button = document.getElementById('toggle__button');
    // const toggle_logo_heading = document.getElementById('toggle_logo_heading');
    // const toggle_sidebar = document.getElementById('toggle_sidebar');

    // toggle__button.addEventListener('click', function() {
    //     // console.log('hello');
    //     toggle_logo_heading.style.display = 'block';
    //     toggle_sidebar.style.display = "block";
    // })






    $(document).ready(function() {
        function checkWindowSize() {
            const windowWidth = $(window).width();

            // Set a breakpoint for adding the class (adjust as needed)
            const breakpoint = 768; // Example: Add class for screens wider than 768px

            if (windowWidth < breakpoint) {

                divStyle = {
                    display: block,
                };

            } else {


            }

        }

        // Call the function on page load
        checkWindowSize();

        // Recheck on window resize to update the class
        $(window).resize(checkWindowSize);
    });
</script>

<script>
    function updateTotal(index) {
        const number_of_cloth = document.getElementById(`number_of_cloth${index}`);
        const price_of_cloth = document.getElementById(`price_of_cloth${index}`);
        const total_price_of_cloth = document.getElementById(`total_price_of_cloth${index}`);
        const value_number_of_cloth = number_of_cloth.value;
        const value_price_of_cloth = price_of_cloth.value;
        const ans = value_number_of_cloth * value_price_of_cloth;
        total_price_of_cloth.value = ans;

    }
</script>


<script>
    let prevDynmTotal = 0;
    const total_price_table_cell = document.getElementById('total_price');
    let finalPrice = 0;


    function updateTotal(index) {

        const number_of_cloth = document.getElementById(`number_of_cloth${index}`);
        const price_of_cloth = document.getElementById(`price_of_cloth${index}`);
        const total_price_of_cloth = document.getElementById(`total_price_of_cloth${index}`);
        const dress_part_type = document.getElementById(`dress_part_type${index}`);
        const value_number_of_cloth = number_of_cloth.value;
        const value_price_of_cloth = price_of_cloth.value;
        const ans = value_number_of_cloth * value_price_of_cloth;
        total_price_of_cloth.innerHTML = ans;

        const total_for_upper_dress = document.getElementById('total_for_upper_dress');
        const quantity_for_upper_dress = document.getElementById('quantity_for_upper_dress');
        const quantity_for_lower_dress = document.getElementById('quantity_for_lower_dress');
        const total_for_lower_dress = document.getElementById('total_for_lower_dress');

        if (dress_part_type.value == 'upper_part') {
            total_for_upper_dress.innerHTML = ans;
            quantity_for_upper_dress.innerHTML = value_number_of_cloth
        } else {
            quantity_for_lower_dress.innerHTML = value_number_of_cloth;
            total_for_lower_dress.innerHTML = ans;
        }
        example()
    }


    const selected_check_boxes = document.getElementById('selected_check_boxes');
    selected_check_boxes.innerHTML = "";
    const selected_check_boxes_pant = document.getElementById('selected_check_boxes_pant');
    selected_check_boxes_pant.innerHTML = "";

    let prevName = "";
    let prevNumOfCloth = "";
    let prevTotal = "";
    let prevTotalLower = 0;
    let PrevNameLower = 0;
    let total_price = 0;
    let total_price_lower = 0;

    function updateMark(index) {

        const cloth_full_name = document.getElementById(`cloth_full_name${index}`);
        const total_price_of_cloth = document.getElementById(`total_price_of_cloth${index}`);
        const price_of_cloth = document.getElementById(`price_of_cloth${index}`);
        const number_of_cloth = document.getElementById(`number_of_cloth${index}`);
        const dress_part_type = document.getElementById(`dress_part_type${index}`);
        const quantity_for_upper_dress = document.getElementById('quantity_for_upper_dress');
        const total_for_upper_dress = document.getElementById('total_for_upper_dress');
        const quantity_for_lower_dress = document.getElementById('quantity_for_lower_dress');
        const total_for_lower_dress = document.getElementById('total_for_lower_dress');

        const selected_check_boxes_pant = document.getElementById('selected_check_boxes_pant')

        total_price_of_cloth.innerHTML = number_of_cloth.value * price_of_cloth.value

        if (dress_part_type.value == 'upper_part') {

            $('.upper_part').prop('readonly', true);
            let ans = number_of_cloth.value * price_of_cloth.value
            quantity_for_upper_dress.innerHTML = number_of_cloth.value
            total_for_upper_dress.innerHTML = ans

        } else {
            $('.lower_part').prop('readonly', true);
            let ans = number_of_cloth.value * price_of_cloth.value
            quantity_for_lower_dress.innerHTML = number_of_cloth.value
            console.log("ans " + ans);
            total_for_lower_dress.innerHTML = ans;
        }

        if (prevName != cloth_full_name) {
            number_of_cloth.readOnly = false;
            prevNumOfCloth.readOnly = false;
        }
        if (cloth_full_name.checked == true) {
            if (prevName.name == undefined || (prevName.name == cloth_full_name.name)) {
                if (dress_part_type.value == 'upper_part') {

                    total_price = parseInt(total_price_of_cloth.innerHTML);
                    quantity_for_upper_dress.value = number_of_cloth.value;
                    total_for_upper_dress.value = number_of_cloth.value * price_of_cloth.value
                    selected_check_boxes.value = cloth_full_name.value;

                } else if (dress_part_type.value == 'lower_part') {
                    total_price_lower = parseInt(total_price_of_cloth.innerHTML);
                    selected_check_boxes_pant.value = cloth_full_name.value
                }

            } else {
                number_of_cloth.readOnly = true;
                if (prevName.name != cloth_full_name.name) {
                    total_price_lower = prevTotal + parseInt(total_price_of_cloth.innerHTML);
                    if (dress_part_type.value == 'upper_part') {
                        selected_check_boxes.value = cloth_full_name.value
                    } else if (dress_part_type.value == 'lower_part') {
                        selected_check_boxes_pant.value = cloth_full_name.value
                    }
                }
            }
        }
        example()
    }

    function example() {
        const total_for_upper_dress = document.getElementById('total_for_upper_dress')
        const total_for_lower_dress = document.getElementById('total_for_lower_dress')
        let total_price = document.getElementById('total_price')
        let total = 0;
        total = parseInt(total_for_upper_dress.innerHTML) + parseInt(total_for_lower_dress.innerHTML);
        total_price.innerHTML = total;


        const upper_part_dress_quantity = document.getElementById('upper_part_dress_quantity')
        const quantity_for_upper_dress = document.getElementById('quantity_for_upper_dress')
        const upper_part_dress_total = document.getElementById('upper_part_dress_total')

        upper_part_dress_quantity.value = parseInt(quantity_for_upper_dress.innerHTML);
        upper_part_dress_total.value = parseInt(total_for_upper_dress.innerHTML);



        const quantity_for_lower_dress = document.getElementById('quantity_for_lower_dress')
        const lower_part_dress_quantity = document.getElementById('lower_part_dress_quantity')

        lower_part_dress_quantity.value = parseInt(quantity_for_lower_dress.innerHTML)


        const lower_part_dress_total = document.getElementById('lower_part_dress_total')

        lower_part_dress_total.value = parseInt(total_for_lower_dress.innerHTML)


        const total_of_upper_and_lower_part_dress = document.getElementById('total_of_upper_and_lower_part_dress');
        total_of_upper_and_lower_part_dress.value = total;



    }
</script>







</body>

</html>
