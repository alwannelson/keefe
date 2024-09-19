$(document).ready(function () {
    $('#guestForm').on('submit', function (e) {
        e.preventDefault();
        console.log('jalan')
        $.ajax({
            type: "POST",
            url: "proses.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function (response) {
                if (response.message) {
                    $('#successBox').fadeIn().delay(3000).fadeOut();
                    $('#guestForm')[0].reset();
                    $('#namaInstansiDiv').hide();
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error: ', status, error);
            }
        });
    });
});