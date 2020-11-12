<script>
    $('#soft-del-user').click(function (event) {
        event.preventDefault();
        var formData = {
            'lockid': $('input[name=softdeleteid]').val(),
        };
        $.ajax({
            type: 'POST',
            url: $('#soft-del-user-form').attr('action')+'/'+formData.lockid,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                swal("success", "user deleted", "success").then(() => {
                    alert('this user can be restored in future')
                    window.location.reload();
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
    $('#restore-user').click(function (event) {

        let formData = {
            'softdel': $('input[name=softdeleteid]').val(),
        };
        swal({
            title: "Restore User?",
            text: "Once restored and active user will be able to perform all action defined in his/her Functional Policy!",
            icon: "info",
            buttons: true,
            dangerMode: true,
        })
            .then((willRestore) => {
                if (willRestore) {
                    event.preventDefault();
                    alert(formData.softdel);

                    $.ajax({
                        type: 'POST',
                        url: $('#soft-del-user-form').attr('action')+'/'+formData.softdel,
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        success: function (data) {
                            swal("success", "user has been restored ", "success").then(() => {
                                window.location.reload();
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
                } else {
                    swal("User not restored!");
                }
            });


    });
</script>