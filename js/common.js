/**
 * Created by pavel on 29.05.2017.
 */
$(document).ready(function(){

    var pos_x, pos_y, scroll_top;

    $('#form_add').on( "submit", function( event ) {
        event.preventDefault();
        data =   $(this).serialize();
        $.ajax({
            url: 'data_transform.php',
            type: 'post',
            data: data+"&type=add",
            success: function(result) {
                $('.tbody').html(result);
                $('#msgSubmit').show(500).delay(2000).hide(1000);

            }
        })
    });
    $('#form_edit').on( "submit", function( event ) {
        event.preventDefault();
        data =   $(this).serialize();
        id_note = $('.edit_form .btn').attr('data_id');
        $.ajax({
            url: 'data_transform.php',
            type: 'post',
            data: data+"&type=edit&id_note="+id_note,
            success: function(result) {
                $('.tbody').html(result);
                $('.edit_form').hide();
                $('#msgSubmit').show(500).delay(2000).hide(1000);
            }
        })
    });



    $("tbody").on("click", "button", function(event){
        id_note =  $(this).attr('id');
        $.ajax({
            url: 'data_transform.php',
            type: 'post',
            data:"id="+id_note+"&type=delete",
            success: function(result) {
                $('.tbody').html(result);
                $('#msgSubmit').show(500).delay(2000).hide(1000);
            }
        })
    });
    $('table').on('click', 'td.edit_cell', function(e){
         elem = $('.edit_form');

         if  (elem.hasClass('open')) {
             elem.hide().removeClass('open');
         }
         else{
            elem.show().addClass('open').css('top', pos_y+"px").css('left', pos_x+"px");;

            var  id = $(this).parent().attr('data_id'),
            articul = $(this).parent().find('.articul'),
            name = $(this).parent().find('.name'),
            id_category = $(this).parent().find('.id_category').attr('data_id'),
            price = $(this).parent().find('.price');

            $('.edit_form #articul').val(articul.text());
            $('.edit_form #name').val(name.text());
            $('.edit_form #id_category').val(id_category);
            $('.edit_form #price').val(price.text());
            $('.edit_form .btn').attr('data_id', id);

         }
    });
    $(window).mousemove(function(e){
        pos_x = e.pageX;
        pos_y = e.pageY - $(this).scrollTop();

    });
    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $(".edit_form"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide(); // скрываем его
        }
    });

});