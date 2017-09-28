// Wait for the DOM to be ready
$(function() {

            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $(".contact-form").validate({

                rules: {
                    name: {
                        required: true,
                        lettersonly: true
                    },
                    phone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    mail: {
                        required: true,
                        email: true
                    },
                    msg: {
                        required: true
                    }
                },
                messages: {

                    name: {
                        required: "Please enter your firstname",
                        lettersonly: "Please enter only letters"
                    },
                    mail: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    phone: {
                        minlength: "Enter 10 digit number",
                        maxlength: "Enter 10 digit number"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

});

              
