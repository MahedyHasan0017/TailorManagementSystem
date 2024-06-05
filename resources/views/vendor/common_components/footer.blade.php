<footer class="footer text-center">
    All Rights Reserved by Zero Point Computing. Designed and Developed by <a
        href="https://www.zeropointcomputing.com">Zero-Point-Computing</a>.
</footer>

</div>

</div>



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
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
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
    function updateTotal(index) {
        const number_of_cloth = document.getElementById(`number_of_cloth${index}`);
        const price_of_cloth = document.getElementById(`price_of_cloth${index}`);
        const total_price_of_cloth = document.getElementById(`total_price_of_cloth${index}`);
        const value_number_of_cloth = number_of_cloth.value;
        const value_price_of_cloth = price_of_cloth.value;
        const ans = value_number_of_cloth * value_price_of_cloth;
        total_price_of_cloth.value = ans;
    }


    const selected_check_boxes = document.getElementById('selected_check_boxes');
    selected_check_boxes.innerHTML = "";
    const selected_check_boxes_pant = document.getElementById('selected_check_boxes_pant');
    selected_check_boxes_pant.innerHTML = "";

    let prevName = "";
    let prevNumOfCloth = "";
    let prevTotal = "" ; 

    function updateMark(index) {

        let total_price = 0
        const cloth_full_name = document.getElementById(`cloth_full_name${index}`);
        const total_price_of_cloth = document.getElementById(`total_price_of_cloth${index}`);
        const number_of_cloth = document.getElementById(`number_of_cloth${index}`);
        const total_price_table_cell = document.getElementById('total_price');
        const dress_part_type = document.getElementById(`dress_part_type${index}`);



        console.log(cloth_full_name);

        if (prevName != cloth_full_name) {
            // number_of_cloth.readOnly = false;
            // prevNumOfCloth.readOnly = false;

            number_of_cloth.readOnly = false;
            prevNumOfCloth.readOnly = false;
        }

        if (cloth_full_name.checked == true) {


            console.log(prevName.name);

            console.log(cloth_full_name.name);

            console.log(prevTotal);

            if((prevName.name != undefined) && (prevName.name != cloth_full_name.name)){
                total_price = prevTotal +  parseInt(total_price_of_cloth.value);
            }

            // if()

            total_price += parseInt(total_price_of_cloth.value);
            number_of_cloth.readOnly = true;
            
            prevName = cloth_full_name;
            prevNumOfCloth = number_of_cloth;
            prevTotal = total_price ; 
            // const option = document.createElement('option');
            // option.value = cloth_full_name.value;
            // option.textContent = cloth_full_name.value;


            if (dress_part_type.value == 'upper_part') {
                selected_check_boxes.value = cloth_full_name.value
            } else if (dress_part_type.value == 'lower_part') {
                selected_check_boxes_pant.value = cloth_full_name.value
            }

        } else {

            
            // total_price -= parseInt(total_price_of_cloth.value);
            total_price = 0
            number_of_cloth.readOnly = false;



            if (dress_part_type.value == 'upper_part') {
                // selected_check_boxes.appendChild(option);
                selected_check_boxes.value = ""

            } else if (dress_part_type.value == 'lower_part') {
                // selected_check_boxes_pant.appendChild(option);
                selected_check_boxes_pant.value = ""
            }



            // console.log();


            // if (dress_part_type.value == 'lower_part') {

            //     for (i = 0; i < selected_check_boxes_pant.length; i++) {
            //         const option = selected_check_boxes_pant.options[i];
            //         if (option.value == cloth_full_name.value) {
            //             return selected_check_boxes_pant.remove(i);
            //         }
            //     }

            // } else if (dress_part_type.value == 'upper_part') {
            //     for (i = 0; i < selected_check_boxes.length; i++) {
            //         const option = selected_check_boxes.options[i];
            //         if (option.value == cloth_full_name.value) {
            //             return selected_check_boxes.remove(i);
            //         }
            //     }
            // }

        }
        total_price_table_cell.innerHTML = total_price;
        // console.log(selected_check_boxes);
    }
</script>




</body>

</html>
