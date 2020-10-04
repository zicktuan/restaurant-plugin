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
                if (dataResult == true) {
                    // $(e.currentTarget).text('Đã nhận bàn')
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

});