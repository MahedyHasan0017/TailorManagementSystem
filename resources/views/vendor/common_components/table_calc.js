
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
let prevTotal = "";
let prevTotalLower = 0;
let PrevNameLower = 0;

function updateMark(index) {

    let total_price = 0;
    let total_price_lower = 0
    const cloth_full_name = document.getElementById(`cloth_full_name${index}`);
    const total_price_of_cloth = document.getElementById(`total_price_of_cloth${index}`);
    const number_of_cloth = document.getElementById(`number_of_cloth${index}`);
    const total_price_table_cell = document.getElementById('total_price');
    const dress_part_type = document.getElementById(`dress_part_type${index}`);



    // console.log(cloth_full_name);

    if ((prevName != cloth_full_name)) {
        // number_of_cloth.readOnly = false;
        // prevNumOfCloth.readOnly = false;

        number_of_cloth.readOnly = false;
        prevNumOfCloth.readOnly = false;
        // console.log('hello');
        // total_price = prevTotal + parseInt(total_price_of_cloth.value) ;


        if (cloth_full_name.name == 'cloth_full_namelower_part') {
            total_price_lower = parseInt(total_price_of_cloth.value);
            console.log(total_price_lower);
        }



    }

    if (cloth_full_name.checked == true) {


        console.log(prevName.name);

        console.log(cloth_full_name.name);

        // console.log(prevTotal);




        if (prevName.name == undefined || (prevName.name == cloth_full_name.name)) {

            if (cloth_full_name.name == 'cloth_full_nameupper_part') {
                total_price = parseInt(total_price_of_cloth.value);
            }
            // console.log(total_price_of_cloth.value);
        }

        // if (cloth_full_name.name == 'cloth_full_namelower_part') {
        //     total_price_lower = parseInt(total_price_of_cloth.value);
        //     console.log(total_price_lower);
        // }


        // if()

        // total_price += parseInt(total_price_of_cloth.value);
        number_of_cloth.readOnly = true;

        prevName = cloth_full_name;
        prevNumOfCloth = number_of_cloth;
        prevTotal = total_price;
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
    total_price_table_cell.innerHTML = total_price + total_price_lower;
    // console.log(selected_check_boxes);
}
