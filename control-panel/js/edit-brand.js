$(document).ready(function () {

    $("#main_category").change(function () {

        var category = this.value;

        $('#subCategory').empty();

        $.ajax({
            url: "post-and-get/ajax/edit-brand.php",
            type: "POST",
            data: {
                category: category,
                actiongetSUB: 'GETSUBCATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option value=""> -- Sub Category -- </option>';

                $.each(jsonStr, function (key, data) {

                    html += '<option value="' + data.id + '">' + data.name + '</option>';

                });

                $('#subCategory').append(html);
                 
            }
        });

    });

});