<script>
    $('#user_update_panel').submit(function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: $(this).attr('action'), // the url where we want to POST
            data: formData, // our data object
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                swal("User info updated", "", "success").then(() => {

                });
            },
            error: function (data) {
                swal({
                    title: 'An error occurred!', icon: 'error'
                }).then(() => {
                    swal('Resolving...')
                    window.location.reload(false);
                })
            }
        })
    });
</script>