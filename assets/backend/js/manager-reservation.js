$(document).ready(function() {

    $('.awe-admin-status').click(function(e) {
        let id = $(e.currentTarget).attr('data-id');
        $.ajax({
            type: 'post',
            url: awe_admin.url + 'admin-ajax.php',
            data: {
                action: 'awe_manage_reservation',
                id
            },
            success: (data) => {
                let dataResult = JSON.parse(data);
                if (dataResult === true) {
                    $(e.currentTarget).closest('#the-list tr').find('.column-status').html('<p data-id="'+id+'" class="awe-admin-status-success" style="color: green;">Đã nhận bàn</p>');
                }
            }
        })
    });


    $('#request-post-query-submit').click(function() {
        let getValPhone = $('.awe-res-reservation-phone-js').val(),
            getValDate  = $('.awe-res-reservation-date-js').val(),
            urlPageCurrent = $(location).attr('href'),
            link = '';

        if( '' !== getValPhone && '' === getValDate) {
            link = urlPageCurrent + '&phone=' + getValPhone;
        } else if ('' !== getValDate && '' === getValPhone) {
            link = urlPageCurrent + '&date=' + getValDate;
        } else {
            link = urlPageCurrent + '&date=' + getValDate + '&phone=' + getValPhone;
        }
        
        window.location.href=link;
    });


    $('#requestdoaction').click(function() {
        let getAllId = $('.awe-admin-check-bk'),
            valSelectorAction = $("#request-bulk-action-selector-top").val(),
            argsId = new Array();
        getAllId.map((key, value) => {
            if ($(value).prop('checked')) {
                argsId.push($(value).val());
            }
        });

        if ('trash' === valSelectorAction) {
            $.ajax({
                type: 'post',
                url: awe_admin.url + 'admin-ajax.php',
                data: {
                    action: 'awe_manage_reservation_trash',
                    argsId
                },
                success: (data) => {
                    let dataResult = JSON.parse(data);
                    if (true === dataResult) {
                        document.location.reload(true);
                    }
                }
            })
        }
        // document.location.reload(true);
    });

    $('.bas-admin-manage-res-delete').click(function(e) {
        let check = confirm('Thông tin khách hàng sẽ bị xóa vĩnh viễn, bạn có chắc chắn muốn xóa?');
        if (true === check) {
            let argsId = $(e.currentTarget).attr("data-id"),
                wrap = $(e.currentTarget).closest('tr');
            $.ajax({
                type: 'post',
                url: awe_admin.url + 'admin-ajax.php',
                data: {
                    action: 'awe_manage_reservation_trash',
                    argsId
                },
                success: (data) => {
                    let dataResult = JSON.parse(data);
                    if (true === dataResult) {
                        wrap.remove();
                    }
                }
            });
        }
    });

});