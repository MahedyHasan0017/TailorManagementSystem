<div class="table-responsive table__container">
    <table class="table">
        <thead class="custom_table_heading">
            <tr>
                <th scope="col">পোশাকের নাম <span style="color:red">*</span></th>
                <th scope="col">সংখ্যা <span style="color:red">*</span></th>
                <th scope="col">মূল্য</th>
                <th scope="col" style="width:20%">মোট মূল্য</th>
            </tr>
        </thead>



        <tbody class="custom_table_body custom_table_height">
            @foreach ($cloth_list as $cloth)
                <tr>
                    <td scope="row">
                        <small class="badge bg-primary">
                            {{ $cloth->dress_part_type }}
                        </small>
                        <div class="form-check">
                            <input class="form-check-input {{ $cloth->dress_part_type }}" type="radio"
                                oninput="updateMark({{ $loop->index }})" value="{{ $cloth->cloth_name }}"
                                name="cloth_full_name{{ $cloth->dress_part_type }}"
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
                            <input type="number" class="form-control {{ $cloth->dress_part_type }}"
                                name="number_of_cloth{{ $loop->index }}" min=1
                                id="number_of_cloth{{ $loop->index }}" value="1"
                                oninput="updateTotal({{ $loop->index }})" readonly>
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
                            {{-- <input type="number" class="form-control" value="{{ $cloth->cloth_price }}"
                                oninput="updatingValues({{ $loop->index }})"
                                name="total_price_of_cloth{{ $loop->index }}"
                                id="total_price_of_cloth{{ $loop->index }}" /> --}}
                        </div>

                        <div class="">
                            <div type="number" class="form-control" {{-- oninput="updatingValues({{ $loop->index }})" --}}
                                name="total_price_of_cloth{{ $loop->index }}"
                                id="total_price_of_cloth{{ $loop->index }}">
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
        <tfoot class="custom_table_footer">

            <th scope="row"></th>
            <td></td>
            <td></td>
            {{-- <td scope="col" >0</td> --}}
            <td scope="col" id='total_price'>0</td>
        </tfoot>
    </table>
</div>
