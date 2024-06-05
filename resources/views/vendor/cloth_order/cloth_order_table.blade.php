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
            @foreach ($cloth_list as $cloth)
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" onchange="updateMark({{ $loop->index }})"
                                value="{{ $cloth->cloth_name }}" name="cloth_full_name{{ $loop->index }}"
                                id="cloth_full_name{{ $loop->index }}">
                            <label class="form-check-label" for="cloth_full_name{{ $loop->index }}">
                                {{ $cloth->cloth_name }}
                            </label>
                            <div>
                                <input type="text" name='dress_part_type{{ $loop->index }}'
                                    id='dress_part_type{{ $loop->index }}' value="{{ $cloth->dress_part_type }}"
                                    placeholder="value" hidden>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <input type="number" class="form-control" name="number_of_cloth{{ $loop->index }}" min=1
                                id="number_of_cloth{{ $loop->index }}" value="1"
                                onchange="updateTotal({{ $loop->index }})">
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <input type="text" class="form-control" name="price_of_cloth{{ $loop->index }}"
                                id="price_of_cloth{{ $loop->index }}" value="{{ $cloth->cloth_price }}" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <input type="text" class="form-control" value="{{ $cloth->cloth_price }}"
                                name="total_price_of_cloth{{ $loop->index }}"
                                id="total_price_of_cloth{{ $loop->index }}"/>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
        <tfoot class="custom_table_footer">

            <th scope="row"></th>
            <td></td>
            <td></td>
            <td scope="col" id='total_price'>0</td>
        </tfoot>
    </table>
</div>
