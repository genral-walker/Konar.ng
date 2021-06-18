
const checkRequestType = type => {
    switch (type) {
        case 'enquire':
            return '../logic/send-enquiry.php';

        case 'register':
            return '../logic/be-a-merchant-request.php';

        case 'pickndrop':
            return '../logic/send-delivery-request.php';

        default:
            break;
    }
};

$("form").submit(function (event) {
    $(`.btn-${event.target.id}`).html("Please Wait...").attr("disabled", true);
    var str = $(event.target).serializeArray();
    $.ajax({
        type: 'POST',
        url: checkRequestType(event.target.id),
        data: str,
        cache: false,
        success: function (data) {
            var result = data;
            if (result == "successful") {
                $(`#cc_content-${event.target.id}`).html($('#cc_success').html());
                $(`.btn-${event.target.id}`).remove();
            } else {
                alert("Request Not Successful. Try again.");
                $(`.btn-${event.target.id}`).html("Try Again").attr("disabled", false);
            }
        },
        error: function (err) {
            alert(err);
        }
    });

    event.preventDefault();
});

