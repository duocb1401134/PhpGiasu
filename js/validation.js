$(function() {
    $.validator.addMethod("strongPassword", function(value, element) {
            return this.optional(element) ||
                value.length >= 6 && /\d/.test(value) && /[a-z]/i.test(value);
        }, "Mật khẩu chứa ít nhất 6 ký tự một ký tự và số"),
        $("#register-form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    strongPassword: true
                },
                password2: {
                    required: true,
                    equalTo: "#password"
                },
                firstName: {
                    required: true,
                    nowhitespace: true,
                    lettersonly: true
                }
            },
            messages: {
                email: {
                    email: 'Email không hợp lệ',
                    required: 'Hãy nhập email'
                }
            }
        });
});
