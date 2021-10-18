<script>
    Livewire.on('checkPassword', postId => {
        checkPassword();
    })
    $('#passGen').on('click', function () {
        var pass = Math.random().toString(36).slice(-8);
        @this.confirmPassword = pass;
        @this.password = pass;
        $("#inp_password").focus();
    });

    function checkPassword() {
        if ($('#eye').hasClass('fa-eye')) {
            $('#inp_password').attr('type', 'password');
            $('#inp_confirm_password').attr('type', 'password');
        } else {
            $('#inp_password').attr('type', 'text');
            $('#inp_confirm_password').attr('type', 'text');
        }
    }

    function showPassword() {
        var type = $('#inp_password').attr('type')
        if (type == 'password') {
            $('#inp_password').attr('type', 'text');
            $('#inp_confirm_password').attr('type', 'text');
            $('#eye').removeClass("fa-eye").addClass("fa-eye-slash");
        } else {
            $('#inp_password').attr('type', 'password');
            $('#inp_confirm_password').attr('type', 'password');
            $('#eye').removeClass("fa-eye-slash").addClass("fa-eye");
        }
    }

</script>
