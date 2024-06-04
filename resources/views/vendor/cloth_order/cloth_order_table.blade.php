<div class="table-responsive table__container">
    <table class="table">
        <thead class="custom_table_heading">
            <tr>
                <th scope="col">পোশাকের নাম <span style="color:red">*</span></th>
                <th scope="col">সংখ্যা <span style="color:red">*</span></th>
                <th scope="col">মূল্য</th>
                <th scope="col">মোট মূল্য</th>
            </tr>
        </thead>
            <tbody class="custom_table_body custom_table_height">
                @foreach ($cloth_list as $cloth )
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                value="{{ $cloth->cloth_name }}" name="cloth_full_name[]" id="cloth_full_name[]">
                            <label class="form-check-label" for="cloth_full_name[]">
                                {{ $cloth->cloth_name }} 
                            </label>
                        </div>
                    </td>

                    <td>
                        <div class="">
                            <input type="number" class="form-control"
                                name="number_of_cloth[]" id="number_of_cloth[]" value="1">
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <input type="text" class="form-control"
                                name="price_of_cloth[]" id="price_of_cloth[]" value="{{ $cloth->cloth_price }}" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <input type="text" class="form-control"
                                name="total_price_of_cloth[]" id="total_price_of_cloth[]">
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot class="custom_table_footer">

                <th scope="row">@twitter</th>
                <td></td>
                <td>cell-3</td>
                <td scope="col">cell 2</td>
            </tfoot>
    </table>
</div>