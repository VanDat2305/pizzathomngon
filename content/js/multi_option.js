$(document).ready(function () {
    var max_fields = 10; //maximum input boxes allowed
    var wrapper = $(".input_option_mulit"); //Fields wrapper
    var add_button = $(".add_input"); //Add button ID

    var x = $(".tr_option_input").length; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment 
            $(wrapper).append('<tr><td>'+ x +'</td><td><input type="text" name="option_name[]" class="form-control"></td><td><input type="number" name="option_price[]" class="form-control"></td><td><i class="far fa-trash-alt btn remove_field"></i></td> </tr>'); //add input box   
        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault(); $(this).parent('td').parent('tr').remove(); x--;
    })
});