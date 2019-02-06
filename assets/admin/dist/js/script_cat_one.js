$(document).ready(function(){
    var i = 1;
    // OPEN AND CLOSE MODAL
    $('.open-modal').on('click',function(){
        var modal_id = $(this).data('modalka_id');
        $(modal_id).show();
        $('#add_pole_cat_lang').show();
        $('#add_pole_edit_cat_lang').show();
    });
    $('.close-modal').on('click',function(){
        var modal_id = $(this).data('modalka_id');
        $(modal_id).hide();
        $('#cont_new_inp').children().remove();
        $('#cont_new_inp_edit').children().remove();
        i=1;
    });

    // MODALS_INSERT

    /*$('#add_cat_one').click(function(){
        var form_add= $("#forma_add")[0];
        var vse_polya_add= new FormData(form_add);
        $.ajax({
            method: "POST",
            url: "/requestCatOne/insert_cat_one",
            data: vse_polya_add,
            contentType: false,
            processData: false,
        }).done(function(elem){
            if(elem){
                alert(elem);
                return;
            }
            window.location="/main/catalogs_one";
        });
    });*/

    // MODALS_UPDATE

    $(".edit_cat").click(function () {
        var cat_id = $(this).data("id");
        var cat_title = $(this).data("title");
        var cat_content = $(this).data("description");
        var cat_image_name = $(this).data("img");
        var cat_price = $(this).data("price");
        var id_author = $(this).data("id_author");

        $("#update_title").val(cat_title);
        $("#update_id").val(cat_id);
        $("#update_content").val(cat_content);
        $("#update_img_name").val(cat_image_name);
        $("#update_price").val(cat_price);
        $("#id_author").val(id_author);

    });
    });

    $("#update_cat_one").on('click', function(){
        var form_edit= $("#forma_update")[0];
        var id = $("#id_author").val();
        var vse_polya_add= new FormData(form_edit);
        $.ajax({
            method: "POST",
            url: "/requestCatOne/update_cat_one",
            data: vse_polya_add,
            contentType: false,
            processData: false,
        }).done(function(){
            window.location="/main/catalogs_one/"+id;
        });
    });

    // DELETE

    /*$(".delete_cat").on('click', function(){
        var cat_id = $(this).data('id');
        var cat_img = $(this).data('img');
        $.ajax({
            method: "POST",
            url: "/requestCatOne/delete_cat_one",
            data: {'id': cat_id, 'img':cat_img},
        }).done(function(){
            window.location="/main/catalogs_one";
        });
    });*/

