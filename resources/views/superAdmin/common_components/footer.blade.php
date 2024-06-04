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
        const value_number_of_cloth = number_of_cloth.value ; 
        const value_price_of_cloth = price_of_cloth.value ; 
        const ans = value_number_of_cloth*value_price_of_cloth ; 
        total_price_of_cloth.value = ans ;  

    }
</script>



</body>

</html>
