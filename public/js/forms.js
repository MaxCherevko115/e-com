function sendForm(formId, url, modalId) {
    $(formId).submit(function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: $(this).data('id') ? url + $(this).data('id') : url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function() {
                $(formId)[0].reset();
                $(modalId).modal('hide');
                $('#message').removeClass('d-none').addClass('show alert-success').html('Successfully!');

                products();
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;

                $(modalId).find('#response').html(catchError(errors));
            }
        });
    });

    function catchError(errors) {
        let errorMessage = '<div class="alert alert-danger"><ul>';

        $.each(errors, function(key, value) {
            errorMessage += '<li>' + value + '</li>';
        });
        errorMessage += '</ul></div>';

        return errorMessage;
    }
}
