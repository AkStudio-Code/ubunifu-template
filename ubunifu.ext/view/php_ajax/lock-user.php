<script>
    $('#lock-user').click(function (event) {
        event.preventDefault();
        var formData = {

                'lockid': $('input[name=lockid]').val(),
        };
        $.ajax({
            type: 'POST',
            url: $('#lock-user-form').attr('action')+'/'+formData.lockid,
            data: $('lock-user-form').serialize(),
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                swal("User suspended: locked", "", "success").then(() => {
                    window.location.reload(false);
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
    $('#unlock-user').click(function (event) {
        event.preventDefault();
        var formData = {

            'lockid': $('input[name=lockid]').val(),
        };
        $.ajax({
            type: 'POST',
            url: $('#lock-user-form').attr('action')+'/'+formData.lockid,
            data: $('#lock-user-form').serialize(),
            cache: false,
            processData: true,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                swal("User is now active", "", "success").then(() => {
                    window.location.reload(false);
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