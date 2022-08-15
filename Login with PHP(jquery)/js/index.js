$("#LoginForm").validate({

    rules: {

        password: {
            required: true,
            number: true,
            min: 3
        },
        email: {
            required: true,
            email: true
        },

    },

    messages : {

        password: {
            required: "Please enter your password",
            number: "Please enter your password as a numerical value",
            min: "Password must be at least 3 characters long"
        },
        email: {
            email: "The email should be in the format: abc@domain.tld"
        },

    },
});



