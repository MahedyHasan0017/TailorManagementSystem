<div class="row text-white">
    <div class="col-12">
        <div>
            <h2>আপনার টেইলর যোগ করার সীমা অতিক্রান্ত হয়েছে</h2>
            <h3>৫ জনের বেশি টেইলর যোগ করতে চাইলে </h3>
            <h3>আপনার পছন্দের পেমেন্ট প্যাকেজটি তৈরি করুন</h3>
        </div>
    </div>

</div>


<div class="row text-white mb-3">
    <div class="col-md-6">
        <div class="text-capitalize text-bold">
            cashout in this number
        </div>
        <div class="cash_out_number">
            1010101010
        </div>
    </div>
</div>


<div class="row text-white">
    <div class="col-md-6">
        <div class="form-group">
            <label class="text-capitalize">
                select your employee number
            </label>
            <select class="form-control" onchange="change_tailor_month()" name='tailor_number' id="tailor_number">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="text-capitalize">
                select your time span
            </label>
            <select class="form-control" onchange="change_tailor_month()" name='time_span' id="time_span">
                <option value="1">1 month</option>
                <option value="2">2 month</option>
                <option value="3">3 month</option>
                <option value="4">4 month</option>
                <option value="5">5 month</option>
                <option value="6">6 month</option>
                <option value="7">7 month</option>
                <option value="8">8 month</option>
                <option value="9">9 month</option>
                <option value="10">10 month</option>
                <option value="11">11 month</option>
                <option value="12">12 month</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <div class="form-group">
                <label for="" class="text-capitalize">Enter your mobile Here : </label>
                <div>
                    <input type="text" class="form-control" placeholder="Enter Transection id Here" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="" class="text-capitalize">Enter Transection Id Here : </label>
            <div>
                <input type="text" class="form-control" placeholder="Enter Transection id Here" />
            </div>
        </div>

    </div>
</div>


<div class="row text-white">
    <div class="col-md-6">
        <div class="">
            <div>
                unit amount for 1 tailor = 500 taka per month
            </div>
            <div>
                <div>
                    Tailor : <span id="tailor">1</span>
                </div>
                <div>
                    Month : <span id="month">1</span>
                </div>
                <div>
                    Total : <span id="total">500</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="text-end">
            <button class="btn btn-success">
                Submit
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const number = document.getElementById('tailor_number');
        const span = document.getElementById('time_span');
        const tailor = document.getElementById('tailor');
        const month = document.getElementById('month');
        const total = document.getElementById('total');

        function change_tailor_month() {
            const tailor_number = number.value;
            const time_span = span.value;
            const total_amount = tailor_number * time_span * 500;
            month.innerHTML = time_span;
            tailor.innerHTML = tailor_number;
            total.innerHTML = total_amount;
        }
    </script>
@endpush
