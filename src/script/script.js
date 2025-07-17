$('#submitBtn').click(function () {
    const input = $('#commandInput').val();
    $.ajax({
        url: 'handler/handler.php',
        method: 'POST',
        data: { input: input },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            const resultCard = $('#resultCard');
            const resultContent = $('#resultContent');

            if (response.success) {
                resultContent
                    .removeClass('text-danger')
                    .addClass('text-success')
                    .text(typeof response.result === 'string' ? response.result : JSON.stringify(response.result, null, 2));
                resultCard.removeClass('d-none');
            } else {
                resultContent
                    .removeClass('text-success')
                    .addClass('text-danger')
                    .text('Error: ' + response.error);
                resultCard.removeClass('d-none');
            }
        },
        error: function () {
            $('#resultContent')
                .removeClass('text-success')
                .addClass('text-danger')
                .text('Unexpected server error.');
            $('#resultCard').removeClass('d-none');
        }
    });
});
