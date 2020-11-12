<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    $("#user_edit").click(function () {
        $('#personal_info_edit_panel').css('background','#dddbe0')
        $('#fname').prop('disabled', false);
        $('#lname').prop('disabled', false);
        $('#phone_no').prop('disabled', false);
        $('#umail').prop('disabled', false);
        $('#select-group').prop('disabled',false)
        $('#fname').focus()
        $('#fname').scrollIntoView()
    })

</script>