require('./bootstrap');
i = 0
$(function(){

    function hideAll(){
        $('#products_create_form').addClass('d-none')
        $('#products_edit_form').remove()
        $('#products_show_div').addClass('d-none')
        $('#products_create_button').addClass('d-none')
    }

    $('#products_create_button').on('click', function(){
        hideAll()
        $('#products_create_form').removeClass('d-none')
    })

    $('#layoutSidenav_content').on('click', '.btn-close.btn-close-white', function(){
        hideAll()
        $('#products_create_button').removeClass('d-none')
    })

    $('#layoutSidenav_content').on('click', '.add-attribute', function(){
        $('.attribute-row')
            .after(`
                <div class="col-9 parent-attribute-row">
                    <div class="row">
                        <div class="col-5">
                            <label for="key_${i}" class="form-label">Название</label>
                            <input type="text" name="data[${i}][key]" id="key_${i}" class="form-control form-control-sm">
                        </div>
                        <div class="col-5">
                            <label for="value_${i}" class="form-label">Значение</label>
                            <input type="text" name="data[${i}][value]" id="value_${i}" class="form-control form-control-sm">
                        </div>
                        <div class="col d-flex align-items-end mb-2">
                            <a href="javascript:void(0);" class="delete-attribute"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            `)
        i++
    })

    $('#layoutSidenav_content').on('click', '.delete-attribute', function(){
        $(this).parents('.col-9.parent-attribute-row:first').remove();
    })

    $('#products tr').on('click', function(){
        $.get(`products/${$(this).attr('id').split('_')[1]}`, function(data){
            $('#products_show_div').html(data)
            hideAll()
            $('#products_show_div').removeClass('d-none')
        })
    })

    $('#layoutSidenav_content').on('click', 'button[data-destroy]', function(e) {
        e.preventDefault();
        if (confirm('Вы действительно хотите удалить?')) {
            $(`#${$(this).attr('data-destroy')}`).trigger('submit');
        }
    });

    $('#layoutSidenav_content').on('click', '.product-edit', function(){
        $.get(`products/${$(this).attr('data-id')}/edit`, function(data){
            hideAll()
            $('#products_edit_div').html(data)
        })
    })
})
